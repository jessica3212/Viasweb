<x-app-layout>
    @livewire('vias-component')

    @push('script')
  <script>
      Livewire.on('deleteVia', codigoVia => {

          Swal.fire({
              title: '¿Estas Seguro?',
              text: "¡No podrás revertir esto!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: '¡Sí, bórralo!',
              cancelButtonText: 'Cancelar'
          }).then((result) => {
              if (result.isConfirmed) {
                  Livewire.emitTo('vias-component', 'delete', codigoVia)
                  Swal.fire(
                      '¡Eliminado!',
                      'Se ha eliminado correctamente.',
                      'success'
                  )
              }
          })
      });
  
      </script> 
    @endpush
</x-app-layout>