<div class="page-wrapper">
  <div class="py-12">
    <div class="mb-8">
        <div class="flex items-center justify-start space-x-3">
            <x-links.back-to-list href="{{ url('/users') }}">Back to List</x-links.back-to-list>
            <x-links.white href="{{ route('users.edit', $user) }}">
                <x-heroicon-m-pencil-square class="w-4 h-4" />
                <span>Edit this user</span>
            </x-links.white>
        </div>
    </div>

    <div class="max-w-lg">
      <div class="card">
        <div class="card-body">

          <table>
            <tr>
              <td>ID</td>
              <td>{{ $user->id }}</td>
            </tr>
            <tr>
              <td>Name</td>
              <td>{{ $user->name }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $user->email }}</td>
            </tr>
            <tr>
              <td>Email Verified At</td>
              <td>{{ $user->email_verified_at }}</td>
            </tr>
            <tr>
              <td>Created At</td>
              <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $user->updated_at }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
