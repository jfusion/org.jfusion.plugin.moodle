<?php namespace JFusion\Plugins\moodle;
/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage moodle
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

/**
 * JFusion Front Class for Moodle 1.8+
 * For detailed descriptions on these functions please check Plugin_Front
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage moodle
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends \JFusion\Plugin\Front
{
    /**
     * @return string
     */
    function getRegistrationURL() {
        return 'login/signup.php';
    }

    /**
     * @return string
     */
    function getLostPasswordURL() {
        return 'login/forgot_password.php';
    }

    /**
     * @return string
     */
    function getLostUsernameURL() {
        return 'login/forgot_password.php';
    }
}
