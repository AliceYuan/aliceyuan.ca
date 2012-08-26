<?php

Yii::import('zii.widgets.CMenu');

class FilterMenu extends CMenu{
  // must set this to allow  parameter changes in CMenu widget call
      public $activateItemsOuter = true;

      public function run() {
          $this->renderMenu($this->items);
      }

    protected function renderMenuItem($item)
    {
        $label=$this->linkLabelWrapper===null ? $item['label'] : '<'.$this->linkLabelWrapper.'>'.$item['label'].'</'.$this->linkLabelWrapper.'>';
        return $label;
        // return CHtml::link($label,$item['url'],isset($item['linkOptions']) ? $item['linkOptions'] : array());
    }

    protected function renderMenuRecursive($items)
      {
        $count=0;
        $n=count($items);
        foreach($items as $item)
        {
          $count++;
          $options=isset($item['itemOptions']) ? $item['itemOptions'] : array();
          $class=array();
          $class[]= strtolower($item['label']);
          if($item['active'] && $this->activeCssClass!='')
            $class[]=$this->activeCssClass;
          if($count===1 && $this->firstItemCssClass!==null)
            $class[]=$this->firstItemCssClass;
          if($count===$n && $this->lastItemCssClass!==null)
            $class[]=$this->lastItemCssClass;
          if($this->itemCssClass!==null)
            $class[]=$this->itemCssClass;
          if($class!==array())
          {
            if(empty($options['class']))
              $options['class']=implode(' ',$class);
            else
              $options['class'].=' '.implode(' ',$class);
          }

          echo CHtml::openTag('li', $options);

          $menu=$this->renderMenuItem($item);
          if(isset($this->itemTemplate) || isset($item['template']))
          {
            $template=isset($item['template']) ? $item['template'] : $this->itemTemplate;
            $template_str = strtr($template,array('{menu}'=>$menu,));
            if (isset($item['url'])){
              echo CHtml::link($template_str, '#', isset($item['linkOptions']) ? $item['linkOptions'] : array());
            }else{
              echo $template_str;
            }
          }
          else
            echo $menu;

          if(isset($item['items']) && count($item['items']))
          {
            echo "\n".CHtml::openTag('ul',isset($item['submenuOptions']) ? $item['submenuOptions'] : $this->submenuHtmlOptions)."\n";
            $this->renderMenuRecursive($item['items']);
            echo CHtml::closeTag('ul')."\n";
          }

          echo CHtml::closeTag('li')."\n";
        }
      }
}


