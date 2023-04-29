<?php


class Router
{

    protected $routes = [];


    protected $params = [];

    /**
     * @param $route
     * @param $params
     * add a route to the routing table
     * route is route
     * params is controller & actions or etc
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }


    /*
     * get all the  routes from routing table
     * return array []
     */
    public function getRoutes()
    {
        return $this->routes;
    }



    public function match_route($url)
    {

        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function getParams()
    {
        return $this->params;
    }
}