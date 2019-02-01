<?php
    
    namespace rgholland\taoRobsExtension\model;
    
    use oat\oatbox\service\ConfigurableService;
    use oat\taoItems\model\event\ItemUpdatedEvent;
    
    class SaveCounterService extends ConfigurableService
    {
        const SERVICE_ID = 'taoRobsExtension/SaveCounter';
        
        public function onItemUpdate(ItemUpdatedEvent $event)
        {
            $this->logDebug('My Cool item has been updated');
        }
    }
