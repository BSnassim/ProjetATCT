<?php

namespace App\Widgets;

use Pd\WidgetBundle\Builder\Item;
use Pd\WidgetBundle\Event\WidgetEvent;

class Dashboard
{
    public function builder(WidgetEvent $event)
    {
        // Get Widget Container
        $widgets = $event->getWidgetContainer();

        // Add Widgets
        $widgets
            ->addWidget((new Item('user_info', 3600)) // Add Cache Time or Default 3600 Second
                ->setGroup('admin')
                ->setName('widget_user_info.name')
                ->setDescription('widget_user_info.description')
                ->setTemplate('widgets/UserInfo.html.twig')
                //->setContent('pdWidget Text Content')
                //->setRole(['USER_INFO_WIDGET'])
                ->setData(function () {
                    return ['userCount' => 5];
                })
                ->setOrder(5)
            );
    }
}