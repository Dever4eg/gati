<?php
/**
 * Created by PhpStorm.
 * User: dever
 * Date: 07.02.18
 * Time: 10:29 PM
 */

namespace App\Http\Controllers\Voyager;


use Illuminate\Routing\Route;
use TCG\Voyager\Models\Page;

class CustomVoyagerMenuController extends \TCG\Voyager\Http\Controllers\VoyagerMenuController
{
    protected function prepareParameters($parameters)
    {
        switch (array_get($parameters, 'type')) {
            case 'page':
                $parameters['url'] = '/pages/'. $parameters['page'];
                unset($parameters['page']);
                break;
            case 'route':
                $parameters['url'] = null;
                //$parameters['page'] = null;
                unset($parameters['page']);
                break;
            default:
                //$parameters['page'] = null;
                unset($parameters['page']);
                $parameters['route'] = null;
                $parameters['parameters'] = '';
                break;
        }

        if (isset($parameters['type'])) {
            unset($parameters['type']);
        }

        return $parameters;
    }
}