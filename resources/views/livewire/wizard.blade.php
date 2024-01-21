<div>
    <x-wizard.steps-menu :step="$step" :completed="$completed" />
    @switch($step)
        @case(1)
            <x-wizard.step-one />
        @break
        @case(2)
            <x-wizard.step-two />
        @break
        @case(3)
            <x-wizard.step-three />
        @break
        @case(4)
            <x-wizard.step-four />
        @break
        @default
    @endswitch
    <div class="flex justify-end gap-6 ">
        <button
            class=" text-black border-2 font-semibold px-4 py-1 rounded-xl hover:bg-blue-100 active:bg-blue-50">Regresar</button>
        <button
            class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-xl hover:bg-blue-400 active:bg-blue-300">Siguiente</button>
    </div>
</div>
