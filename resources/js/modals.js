Copyimport { Modal } from 'bootstrap';

let modalsElement = document.getElementById('laravel-livewire-modals');

modalsElement.addEventListener('hidden.bs.modal', () => {
    Livewire.dispatch('resetModal');
});

document.addEventListener('livewire:initialized', () => {
    Livewire.on('showBootstrapModal', () => {
        let modal = Modal.getInstance(modalsElement);

        if (!modal) {
            modal = new Modal(modalsElement);
        }

        modal.show();
    });

    Livewire.on('hideModal', () => {
        let modal = Modal.getInstance(modalsElement);

        if (modal) {
            modal.hide();
        }
    });
});
