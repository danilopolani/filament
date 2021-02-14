<div>
    <x-filament::app-header :title="__($title)" />

    <x-filament::app-content>
        <x-filament::card>
            <x-filament::form :fields="$this->getForm()->fields" class="space-y-6">
                <x-filament::button
                    type="submit"
                    color="primary"
                    wire:loading.attr="disabled"
                >
                    Create
                </x-filament::button>
            </x-filament::form>
        </x-filament::card>
    </x-filament::app-content>
</div>