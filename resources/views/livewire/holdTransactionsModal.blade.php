<x-modal.card max-width="3xl" title="Hold Transaction" align="center" blur wire:model="holdTransactionModal">
    
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Create a Title That Is Easy to Recall | If No Title Is Provided, the Current Time Will Be Used</label>        <x-input wire:model="transactionHoldTitle" placeholder="e.g Customer Name" autofocus />
    </div>
     
                        
        
        
   
    
    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">
          
 
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="Confirm" wire:click="holdTransaction" />
            </div>
        </div>
    </x-slot>
</x-modal.card>