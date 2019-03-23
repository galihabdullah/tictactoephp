<?php
namespace App\Controller;
use Slim\Views\Twig as TwigViews;
/**
 * Class AbstractController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="galihtictactoephp.herokuapp.com",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0.0.0",
 *         title="Sample Application",
 *         @SWG\Contact(name="Galih Abdullah", url="binar.co.id"),
 *     )
 * )
 */
class AbstractController
{
    protected $container;
    public function __construct($container)
    {
        $this->container = $container;
    }
    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }
}