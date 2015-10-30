<?php


abstract class SocialSharing_Projects_Builder
{
    const COUNTER_STANDARD = 'standard';
    const COUNTER_ARROWED = 'arrowed';
    const COUNTER_RIGHT_ARROWED = 'white-arrowed';

    /**
     * @var Rsc_Environment
     */
    private $environment;

    /**
     * @var SocialSharing_Projects_Project
     */
    private $project;

    /**
     * Constructs the builder.
     * @param \SocialSharing_Projects_Project $project
     * @param \Rsc_Environment $environment
     */
    public function __construct(SocialSharing_Projects_Project $project, Rsc_Environment $environment)
    {
        $this->project = $project;
        $this->environment = $environment;
    }

    /**
     * Returns the buttons container.
     * @return \SocialSharing_HtmlBuilder_Element
     */
    protected function getContainer()
    {
        return $this->getBuilder()->createElement(
            'div',
            $this->getContainerAttributes()
        );
    }

    /**
     * Returns the composite.
     * @throws UnexpectedValueException If SocialSharing_Project_Builder::getButtons() returned invalid value.
     * @return \SocialSharing_HtmlBuilder_Element
     */
    public function getComposite()
    {
        $container = $this->getContainer();
        $buttons = $this->getButtons();

        if (!is_array($buttons)) {
            throw new UnexpectedValueException(
                'The builder must return an array of the buttons elements.'
            );
        }

        if (count($buttons) > 0) {
            foreach ($buttons as $button) {
                $container->addElement($button);
            }
        }

        return $container;
    }

    /**
     * Returns the collection of the buttons.
     * @return SocialSharing_HtmlBuilder_AbstractElement[]
     */
    public function getButtons()
    {
        $collection = array();
        $networks = $this->getProject()->getNetworks();

        if (0 === count($networks)) {
            return $collection;
        }

        foreach ($networks as $network) {
            try {
                $collection[] = $this->getButton(
                    new SocialSharing_Projects_Builder_Network((array)$network)
                );
            } catch (Exception $e) {
                if ((defined('WP_DEBUG') && WP_DEBUG) && (function_exists(
                            'is_super_admin'
                        ) && is_super_admin())
                ) {
                    wp_die(
                        $e->getMessage() . ' Network: ' . json_encode($network)
                    );
                }
            }
        }

        return $collection;
    }

    /**
     * Returns the composite of the button.
     * @param \SocialSharing_Projects_Builder_Network $network
     * @return \SocialSharing_HtmlBuilder_AbstractElement
     */
    abstract public function getButton(SocialSharing_Projects_Builder_Network $network);

    /**
     * Returns the unique builder name.
     * @return string
     */
    abstract public function getName();

    /**
     * Returns Environment.
     * @return Rsc_Environment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Returns Project.
     * @return SocialSharing_Projects_Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Returns HtmlBuilder module
     * @return SocialSharing_HtmlBuilder_Module
     */
    protected function getBuilder()
    {
        return $this->environment->getModule('HtmlBuilder');
    }

    /**
     * Returns current post or page or NULL if there is homepage.
     * @return null|\WP_Post
     */
    protected function getCurrentPost()
    {
        return $this->isHomepage() ? null : get_post();
    }

    /**
     * Converts assoc array to the CSS properties string.
     * @param array $styles Associative array of the properties and values
     * @return string
     */
    protected function compileStyle(array $styles)
    {
        $css = '';

        if (0 === count($styles)) {
            return $css;
        }

        foreach ($styles as $property => $value) {
            $css .= $property . ':' . $value . ';';
        }

        return $css;
    }

    /**
     * Returns container's inline styles.
     * @return string
     */
    protected function getContainerStyle()
    {
        return $this->compileStyle(
            array(
                'font-size' => $this->project->get('buttons_size', 1) . 'em',
                'display'   => 'none'
            )
        );
    }

    /**
     * Returns an array of the container classes.
     * @return array
     */
    protected function getContainerClasses()
    {
        $classes = array(
            'supsystic-social-sharing',
            'supsystic-social-sharing-package-'.strtolower($this->getName())
        );

        if ($this->project->isHiddenOnMobile()) {
            $classes[] = 'supsystic-social-sharing-mobile';
        }

        if ($this->project->isShowOnClick()) {
            $classes[] = 'supsystic-social-sharing-click';
        }

        if ($this->project->has('spacing')) {
            $classes[] = 'supsystic-social-sharing-spacing';
        }

        if ($this->project->isShowAtSidebar()) {
            $classes[] = 'supsystic-social-sharing-fixed';
            $classes[] = 'supsystic-social-sharing-' . $this->project->getExtra(
                    'left'
                );

            if (function_exists('is_admin_bar_showing') && is_admin_bar_showing()) {
                $classes[] = 'supsystic-social-sharing-adminbar';
            }
        } else {
            $classes[] = 'supsystic-social-sharing-content';
        }

        return $classes;
    }

    /**
     * Returns the collection of the container attributes.
     * @return SocialSharing_HtmlBuilder_Attribute[]
     */
    protected function getContainerAttributes()
    {
        $builder = $this->getBuilder();

        return array(
            $builder->createAttribute(
                'data-animation',
                $this->project->get('buttons_animation', 'no-animation')
            ),
            $builder->createAttribute(
                'data-icons-animation',
                $this->project->get('icons_animation', 'no-animation')
            ),
            $builder->createAttribute(
                'data-overlay',
                $this->project->get('overlay_with_shadow')
            ),
            $builder->createAttribute(
                'data-change-size',
                $this->project->get('change_size')
            ),
            $builder->createAttribute(
                'data-button-size',
                $this->project->get('buttons_size', 'normal')
            ),
            $builder->createAttribute(
                'style',
                $this->getContainerStyle()
            ),
            $builder->createAttribute(
                'class',
                $this->getContainerClasses()
            )
        );
    }

    /**
     * This home page or not?
     * @return bool
     */
    public function isHomepage()
    {
        $schema = is_ssl() ? 'https://' : 'http://';
        $currentUrl = strtolower(trailingslashit($schema . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI']));
        $baseUrl = strtolower(trailingslashit(get_bloginfo('wpurl')));

        return $currentUrl === $baseUrl;
    }
}
