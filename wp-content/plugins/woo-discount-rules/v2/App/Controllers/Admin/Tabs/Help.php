<?php
namespace Wdr\App\Controllers\Admin\Tabs;

if (!defined('ABSPATH')) exit;

class Help extends Base
{
    public $priority = 60;
    protected $tab = 'help';

    /**
     * Help constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->title = __('Read Documentation', 'woo-discount-rules');
    }

    /**
     * Render Read documents page
     * @param null $page
     * @return mixed|void
     */
    public function render($page = NULL)
    {
        self::$template_helper->setPath(WDR_PLUGIN_PATH . 'App/Views/Admin/Tabs/help.php')->display();
    }
}