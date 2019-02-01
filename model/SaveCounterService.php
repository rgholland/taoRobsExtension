<?php
    
    namespace rgholland\taoRobsExtension\model;
    
    use oat\generis\model\OntologyAwareTrait;
    use oat\oatbox\service\ConfigurableService;
    use oat\taoItems\model\event\ItemUpdatedEvent;
    
    class SaveCounterService extends ConfigurableService
    {
        use OntologyAwareTrait;
        const SERVICE_ID = 'taoRobsExtension/SaveCounter';
        const PROPERTY_COUNT = 'http://www.tao.lu/Ontologies/TAOItem.rdf#ItemCounttt';
        public function onItemUpdate(ItemUpdatedEvent $event)
        {
            $item = $this->getResource($event->getItemUri());
            $property = $this->getProperty(self::PROPERTY_COUNT);
            
            $value = (integer) $item->getOnePropertyValue($property);
            
            $this->logDebug('My Cool item has been updated whit the following value: '. $value);
            
            $value++;
            $item->editPropertyValues($property, $value);
        }
    }
