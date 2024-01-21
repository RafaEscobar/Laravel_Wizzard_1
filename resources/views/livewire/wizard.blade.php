<div>
    <x-wizard.steps-menu :step="$step" :completed="$completed" />
    @switch($step)
        @case(1)
            
        @break
    
        @default
            
    @endswitch
</div>
