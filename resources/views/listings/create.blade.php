<x-layout>
  <div class="mx-auto mt-24 max-w-lg rounded border border-gray-200 bg-gray-50 p-10">
    <header class="text-center">
      <h2 class="mb-1 text-2xl font-bold uppercase">
        Create Profile
      </h2>
      <p class="mb-4">Create profile to find a punk date</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
      {{-- csrf prevents cross-site scripting attacks, so people can't have a form on their website to submit to your endpoint --}}
      @csrf
      <div class="mb-6">
        <label for="name" class="mb-2 inline-block text-lg">Name</label>
        <input type="text" class="w-full rounded border border-gray-200 p-2" name="name" {{-- keep data in field after error --}}
          value="{{ old('name') }}" />
        {{-- if any of the form fields fail, laravel sends back an error message to the create view --}}
        @error('name')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="age" class="mb-2 inline-block text-lg">age</label>
        <input type="number" class="w-full rounded border border-gray-200 p-2" name="age"
          value="{{ old('age') }}" />

        @error('age')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="mb-2 inline-block text-lg">Location</label>
        <input type="text" class="w-full rounded border border-gray-200 p-2" name="location"
          value="{{ old('location') }}" placeholder="Example: Boston MA, etc" />

        @error('location')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="mb-2 inline-block text-lg">Email</label>
        <input type="text" class="w-full rounded border border-gray-200 p-2" name="email"
          value="{{ old('email') }}" />

        @error('email')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="mb-2 inline-block text-lg">
          Tags (Comma Separated)
        </label>
        <input type="text" class="w-full rounded border border-gray-200 p-2" name="tags"
          value="{{ old('tags') }}" placeholder="Example: female, male, straight, gay, bi" />

        @error('tags')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="image" class="mb-2 inline-block text-lg">
          Profile Picture
        </label>
        <input type="file" class="w-full rounded border border-gray-200 p-2" name="image" />

        @error('image')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="mb-2 inline-block text-lg">
          Description
        </label>
        <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
          placeholder="Include: age, bio, bla, etc...">
      {{ old('description') }}
        </textarea>

        @error('description')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel rounded px-4 py-2 text-white hover:bg-black">
          Create Profile
        </button>

        <a href="/" class="ml-4 text-black"> Back </a>
      </div>
    </form>
  </div>
</x-layout>
