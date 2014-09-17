<?php /** * Created by PhpStorm. * User: Maile * Date: 15.09.14 * Time: 12:27 */

class login extends Controller {
    public $requires_auth = true;
    function index() { header('Location: '.BASE_URL); } }

?>