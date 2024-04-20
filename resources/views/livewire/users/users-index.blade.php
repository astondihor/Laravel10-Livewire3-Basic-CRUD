<div class="page-wrapper">
  <div class="py-12">

    <x-flash-message />

    <div class="mb-8">
      <a class="btn btn-success" href="{{ url('/users/create') }}">
        <x-heroicon-o-plus class="w-5 h-5" />
        <span>Add User</span>
      </a>
    </div>

    <div class="pt-2 card">

      <div class="overflow-hidden">
        <div class="relative overflow-x-auto">
          <table class="w-full table-auto my-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr wire:key="{{ $user->id }}">
                  <td>{{ $user->id }}</td>
                  <td>
                    <div class="flex items-center justify-center space-x-1">
                      <x-links.tables.edit href="{{ route('users.edit', $user) }}"></x-links.tables.edit>
                      <x-links.tables.show href="{{ route('users.show', $user) }}"></x-links.tables.show>
                      <x-links.tables.delete
                                             wire:click="$dispatch('deletionConfirmation', {{ $user }})"></x-links.tables.delete>
                    </div>
                  </td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->email_verified_At }}</td>
                  <td>{{ $user->created_at->format('d M Y - H:i') }}</td>
                  <td>{{ $user->updated_at->format('d M Y - H:i') }}</td>
                </tr>
              @empty
                <tr>
                  <td colspan="3">There is no data at this moment</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
      <div class="px-4 py-2">
        {{ $users->links() }}
      </div>
    </div>
  </div>

  @push('scripts')
    <script type="module">
      document.addEventListener('livewire:init', () => {

        Livewire.on('deletionConfirmation', e => {
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: "btn btn-success",
              cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              @this.destroy(e)
              swalWithBootstrapButtons.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
              });
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe :)",
                icon: "error"
              });
            }
          });
        })
      })
    </script>
  @endpush
</div>
