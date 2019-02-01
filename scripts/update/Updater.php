<?php
    
    namespace rgholland\taoRobsExtension\scripts\update;
    
    use oat\tao\scripts\update\OntologyUpdater;
    
    class Updater extends \common_ext_ExtensionUpdater {
        public function update($intialVersion) {
            if ($this->isVersion('0.1.0')) {
                OntologyUpdater::syncModels();
                
                $this->setVersion('0.2.0');
            }
        }
    }
