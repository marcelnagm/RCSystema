<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // msoft_rc_system_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'msoft_rc_system_homepage');
            }

            return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\DefaultController::indexAction',  '_route' => 'msoft_rc_system_homepage',);
        }

        if (0 === strpos($pathinfo, '/subcategory')) {
            // tb_subcategory
            if ($pathinfo === '/subcategory') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::indexAction',  '_route' => 'tb_subcategory',);
            }

            // tb_subcategory_show
            if (0 === strpos($pathinfo, '/subcategory/id-category') && preg_match('#^/subcategory/id\\-category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tb_subcategory_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_subcategory_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::listAction',));
            }
            not_tb_subcategory_show:

            // tb_subcategory_new
            if ($pathinfo === '/subcategory/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::newAction',  '_route' => 'tb_subcategory_new',);
            }

            // tb_subcategory_create
            if ($pathinfo === '/subcategory/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_subcategory_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::createAction',  '_route' => 'tb_subcategory_create',);
            }
            not_tb_subcategory_create:

            // tb_subcategory_edit
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_subcategory_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::editAction',));
            }

            // tb_subcategory_update
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_subcategory_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_subcategory_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::updateAction',));
            }
            not_tb_subcategory_update:

            // tb_subcategory_delete
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_subcategory_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_subcategory_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbSubcategoryController::deleteAction',));
            }
            not_tb_subcategory_delete:

        }

        if (0 === strpos($pathinfo, '/product')) {
            // tb_product_print
            if ($pathinfo === '/product/print') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::printAction',  '_route' => 'tb_product_print',);
            }

            // tb_product_nostock
            if ($pathinfo === '/product/nostock') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::noStockAction',  '_route' => 'tb_product_nostock',);
            }

            // tb_product
            if ($pathinfo === '/product') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::indexAction',  '_route' => 'tb_product',);
            }

            // tb_product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_product_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::showAction',));
            }

            // tb_product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::newAction',  '_route' => 'tb_product_new',);
            }

            // tb_product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_product_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::createAction',  '_route' => 'tb_product_create',);
            }
            not_tb_product_create:

            // tb_product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_product_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::editAction',));
            }

            // tb_product_update
            if (preg_match('#^/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_product_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::updateAction',));
            }
            not_tb_product_update:

            // tb_product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tb_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_product_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbProductController::deleteAction',));
            }
            not_tb_product_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // tb_category
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::indexAction',  '_route' => 'tb_category',);
            }

            // tb_category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_category_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::showAction',));
            }

        }

        // tb_category_new
        if ($pathinfo === '/tbcategory/new') {
            return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::newAction',  '_route' => 'tb_category_new',);
        }

        if (0 === strpos($pathinfo, '/category')) {
            // tb_category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_category_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::createAction',  '_route' => 'tb_category_create',);
            }
            not_tb_category_create:

            // tb_category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_category_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::editAction',));
            }

            // tb_category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_category_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::updateAction',));
            }
            not_tb_category_update:

            // tb_category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_category_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::deleteAction',));
            }
            not_tb_category_delete:

            // tb_categorty
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::indexAction',  '_route' => 'tb_categorty',);
            }

            // tb_categorty_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_categorty_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::showAction',));
            }

        }

        // tb_categorty_new
        if ($pathinfo === '/tbcategory/new') {
            return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::newAction',  '_route' => 'tb_categorty_new',);
        }

        if (0 === strpos($pathinfo, '/category')) {
            // tb_categorty_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_categorty_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::createAction',  '_route' => 'tb_categorty_create',);
            }
            not_tb_categorty_create:

            // tb_categorty_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_categorty_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::editAction',));
            }

            // tb_categorty_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_categorty_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_categorty_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::updateAction',));
            }
            not_tb_categorty_update:

            // tb_categorty_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_categorty_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_categorty_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCategoryController::deleteAction',));
            }
            not_tb_categorty_delete:

        }

        if (0 === strpos($pathinfo, '/deliver')) {
            // tb_deliver
            if ($pathinfo === '/deliver') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::indexAction',  '_route' => 'tb_deliver',);
            }

            // tb_deliver_show
            if (preg_match('#^/deliver/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_deliver_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::showAction',));
            }

            // tb_deliver_new
            if ($pathinfo === '/deliver/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::newAction',  '_route' => 'tb_deliver_new',);
            }

            // tb_deliver_create
            if ($pathinfo === '/deliver/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_deliver_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::createAction',  '_route' => 'tb_deliver_create',);
            }
            not_tb_deliver_create:

            // tb_deliver_edit
            if (preg_match('#^/deliver/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_deliver_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::editAction',));
            }

            // tb_deliver_update
            if (preg_match('#^/deliver/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_deliver_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_deliver_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::updateAction',));
            }
            not_tb_deliver_update:

            // tb_deliver_delete
            if (preg_match('#^/deliver/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tb_deliver_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_deliver_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbDeliverController::deleteAction',));
            }
            not_tb_deliver_delete:

        }

        if (0 === strpos($pathinfo, '/entry')) {
            // tb_entry
            if ($pathinfo === '/entry') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::indexAction',  '_route' => 'tb_entry',);
            }

            // tb_entry_show
            if (preg_match('#^/entry/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_entry_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::showAction',));
            }

            // tb_entry_new
            if ($pathinfo === '/entry/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::newAction',  '_route' => 'tb_entry_new',);
            }

            // tb_entry_create
            if ($pathinfo === '/entry/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_entry_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::createAction',  '_route' => 'tb_entry_create',);
            }
            not_tb_entry_create:

            // tb_entry_edit
            if (preg_match('#^/entry/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_entry_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::editAction',));
            }

            // tb_entry_update
            if (preg_match('#^/entry/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_entry_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_entry_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::updateAction',));
            }
            not_tb_entry_update:

            // tb_entry_delete
            if (preg_match('#^/entry/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_entry_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_entry_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbEntryController::deleteAction',));
            }
            not_tb_entry_delete:

            // tb_entry_add_stock
            if (preg_match('#^/entry/(?P<id>[^/]++)/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_entry_add_stock')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::indexOneAction',));
            }

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // tb_stock
            if ($pathinfo === '/stock') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::indexAction',  '_route' => 'tb_stock',);
            }

            // tb_stock_new
            if ($pathinfo === '/stock/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::newAction',  '_route' => 'tb_stock_new',);
            }

            // tb_stock_new_one
            if (0 === strpos($pathinfo, '/stock/add') && preg_match('#^/stock/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_stock_new_one')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::newOneAction',));
            }

            if (0 === strpos($pathinfo, '/stock/c')) {
                // tb_stock_confirm
                if (0 === strpos($pathinfo, '/stock/confirm') && preg_match('#^/stock/confirm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_stock_confirm')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::confirmAction',));
                }

                // tb_stock_create
                if ($pathinfo === '/stock/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tb_stock_create;
                    }

                    return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::createAction',  '_route' => 'tb_stock_create',);
                }
                not_tb_stock_create:

            }

            // tb_stock_edit
            if (preg_match('#^/stock/(?P<id>[^/]++)/edit/entry/(?P<id_entry>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_stock_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::editAction',));
            }

            // tb_stock_update
            if (preg_match('#^/stock/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_stock_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_stock_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::updateAction',));
            }
            not_tb_stock_update:

            // tb_stock_delete
            if (preg_match('#^/stock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_stock_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_stock_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbStockController::deleteAction',));
            }
            not_tb_stock_delete:

        }

        if (0 === strpos($pathinfo, '/client')) {
            // tb_client
            if ($pathinfo === '/client') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::indexAction',  '_route' => 'tb_client',);
            }

            // tb_client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_client_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::showAction',));
            }

            // tb_client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::newAction',  '_route' => 'tb_client_new',);
            }

            // tb_client_new_pdv
            if ($pathinfo === '/client/pdv/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::newPDVAction',  '_route' => 'tb_client_new_pdv',);
            }

            // tb_client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_client_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::createAction',  '_route' => 'tb_client_create',);
            }
            not_tb_client_create:

            // tb_client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_client_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::editAction',));
            }

            // tb_client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_client_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::updateAction',));
            }
            not_tb_client_update:

            // tb_client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                    goto not_tb_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_client_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbClientController::deleteAction',));
            }
            not_tb_client_delete:

        }

        // tb_method_payment
        if ($pathinfo === '/method-payment') {
            return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::indexAction',  '_route' => 'tb_method_payment',);
        }

        // tb_method_payment_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_method_payment_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::showAction',));
        }

        if (0 === strpos($pathinfo, '/method-payment')) {
            // tb_method_payment_new
            if ($pathinfo === '/method-payment/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::newAction',  '_route' => 'tb_method_payment_new',);
            }

            // tb_method_payment_create
            if ($pathinfo === '/method-payment/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_method_payment_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::createAction',  '_route' => 'tb_method_payment_create',);
            }
            not_tb_method_payment_create:

            // tb_method_payment_edit
            if (preg_match('#^/method\\-payment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_method_payment_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::editAction',));
            }

            // tb_method_payment_update
            if (preg_match('#^/method\\-payment/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_method_payment_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_method_payment_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::updateAction',));
            }
            not_tb_method_payment_update:

            // tb_method_payment_delete
            if (preg_match('#^/method\\-payment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tb_method_payment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_method_payment_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbMethodPaymentController::deleteAction',));
            }
            not_tb_method_payment_delete:

        }

        if (0 === strpos($pathinfo, '/cart')) {
            // tb_cart
            if (preg_match('#^/cart/(?P<id>[^/]++)/select$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_cart')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::indexAction',));
            }

            // tb_cart_show
            if (preg_match('#^/cart/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_cart_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::showAction',));
            }

            // tb_cart_list
            if ($pathinfo === '/cart/list') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::listAction',  '_route' => 'tb_cart_list',);
            }

            // tb_cart_novo
            if ($pathinfo === '/cart/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::newAction',  '_route' => 'tb_cart_novo',);
            }

            // tb_cart_create
            if ($pathinfo === '/cart/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tb_cart_create;
                }

                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::createAction',  '_route' => 'tb_cart_create',);
            }
            not_tb_cart_create:

            // tb_cart_edit
            if (preg_match('#^/cart/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_cart_edit')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::editAction',));
            }

            // tb_cart_update
            if (preg_match('#^/cart/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tb_cart_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_cart_update')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::updateAction',));
            }
            not_tb_cart_update:

            // tb_cart_delete
            if (preg_match('#^/cart/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tb_cart_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_cart_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbCartController::deleteAction',));
            }
            not_tb_cart_delete:

        }

        if (0 === strpos($pathinfo, '/payment')) {
            // tb_payment_print
            if ($pathinfo === '/payment/print') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbPaymentController::printAction',  '_route' => 'tb_payment_print',);
            }

            // tb_payment_filter
            if ($pathinfo === '/payment/filter') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbPaymentController::indexFilterAction',  '_route' => 'tb_payment_filter',);
            }

            // tb_payment
            if ($pathinfo === '/payment') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbPaymentController::indexAction',  '_route' => 'tb_payment',);
            }

            // tb_payment_show
            if (preg_match('#^/payment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_payment_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbPaymentController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/shop')) {
            // tb_shop
            if ($pathinfo === '/shop') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbShopController::indexAction',  '_route' => 'tb_shop',);
            }

            // tb_shop_show
            if (preg_match('#^/shop/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tb_shop_show')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbShopController::showAction',));
            }

            // tb_shop_client
            if ($pathinfo === '/shop/client') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\TbShopController::indexClientAction',  '_route' => 'tb_shop_client',);
            }

        }

        if (0 === strpos($pathinfo, '/pdv')) {
            // pdv
            if ($pathinfo === '/pdv') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::indexAction',  '_route' => 'pdv',);
            }

            // pdv_select_client
            if ($pathinfo === '/pdv/new') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::selectClientAction',  '_route' => 'pdv_select_client',);
            }

            if (0 === strpos($pathinfo, '/pdv/pay')) {
                // pdv_select_pay
                if ($pathinfo === '/pdv/pay') {
                    return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::selectPaymentAction',  '_route' => 'pdv_select_pay',);
                }

                // pdv_pay_create
                if ($pathinfo === '/pdv/pay/create') {
                    return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::createPaymentAction',  '_route' => 'pdv_pay_create',);
                }

                // pdv_pay_delete
                if (preg_match('#^/pdv/pay/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdv_pay_delete')), array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::deletePaymentAction',));
                }

            }

            // pdv_summary
            if ($pathinfo === '/pdv/summary') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::reviewAction',  '_route' => 'pdv_summary',);
            }

            // pdv_confirm
            if ($pathinfo === '/pdv/confirm') {
                return array (  '_controller' => 'Msoft\\RCSystemBundle\\Controller\\PDVController::confirmAction',  '_route' => 'pdv_confirm',);
            }

        }

        if (0 === strpos($pathinfo, '/job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }

            // ens_job_show
            if (preg_match('#^/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',));
            }

            // ens_job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ens_job_new',);
            }

            // ens_job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_create;
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'ens_job_create',);
            }
            not_ens_job_create:

            // ens_job_edit
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',));
            }

            // ens_job_update
            if (preg_match('#^/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ens_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_update')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',));
            }
            not_ens_job_update:

            // ens_job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ens_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_ens_job_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        // fos_user_group_list
        if ($pathinfo === '/list') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_group_list;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
        }
        not_fos_user_group_list:

        // fos_user_group_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
        }

        // fos_user_group_show
        if (preg_match('#^/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_group_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
        }
        not_fos_user_group_show:

        // fos_user_group_edit
        if (preg_match('#^/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
        }

        // fos_user_group_delete
        if (preg_match('#^/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_group_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
        }
        not_fos_user_group_delete:

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
