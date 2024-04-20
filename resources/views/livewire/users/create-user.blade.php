<div class="page-wrapper">
  <div class="py-12">

    <div class="mb-8">
        <x-links.back-to-list href="{{ url('/users') }}">Back to List</x-links.back-to-list>
    </div>

    <div class="max-w-lg">
      <div class="card">
        <div class="card-body">
          <form wire:submit.prevent="save">
            <div class="mb-4">
              <label for="name">Name</label>
              <input class="w-full form-input @error('form.name') is-invalid @enderror"
                     id="name"
                     name="name"
                     wire:model="form.name"
                     placeholder="Name"
                     type="text" />
                     @error('form.name')
                         <div class="error-text">{{ $message }}</div>
                     @enderror
            </div>
            <div class="mb-4">
              <label for="email">Email</label>
              <input class="w-full form-input @error('form.email') is-invalid @enderror"
                     id="email"
                     name="email"
                     wire:model="form.email"
                     placeholder="Email address"
                     type="email" />
                     @error('form.email')
                         <div class="error-text">{{ $message }}</div>
                     @enderror
            </div>
            <div class="mb-4">
              <label for="password">Password</label>
              <input class="w-full form-input @error('form.password') is-invalid @enderror"
                     id="password"
                     name="password"
                     wire:model="form.password"
                     type="password" />
                     @error('form.password')
                         <div class="error-text">{{ $message }}</div>
                     @enderror
            </div>
            <div class="mb-4">
              <label for="password_confirmation">Password Confirmation</label>
              <input class="w-full form-input @error('form.password') is-invalid @enderror"
                     id="password_confirmation"
                     name="password_confirmation"
                     wire:model="form.password_confirmation"
                     type="password" />
                     @error('form.password')
                         <div class="error-text">{{ $message }}</div>
                     @enderror
            </div>

            <div class="mt-8">
                <div class="flex items-center justify-end space-x-3">
                    @if ($editMode)
                        <x-buttons.update />
                    @else
                        <x-buttons.submit />
                    @endif
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
