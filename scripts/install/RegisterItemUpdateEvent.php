<?php
    
    namespace rgholland\taoRobsExtension\scripts\install;
    
    use oat\oatbox\extension\InstallAction;
    use oat\taoItems\model\event\ItemUpdatedEvent;
    use rgholland\taoRobsExtension\model\SaveCounterService;
    
    class RegisterItemUpdateEvent extends InstallAction
    {
        public function __invoke($params)
        {
            $this->registerEvent(ItemUpdatedEvent::class, [
                                 SaveCounterService::SERVICE_ID,
                                 'onItemUpdate',
                                 ]);
        }
    }
