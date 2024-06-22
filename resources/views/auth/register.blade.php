<x-layout>
   <x-page-header>Register Page</x-page-header>
   <x-forms.form  method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Your Name"></x-forms.input>
        <x-forms.input name="email" label="Your Email" type="email"></x-forms.input>
        <x-forms.input name="password" label="Your Password" type="password"></x-forms.input>
        <x-forms.input name="password_confirmation" label="Password Confirmation" type="password"></x-forms.input>
        <x-forms.divider></x-forms.divider>
        <x-forms.input name="employer" label="Employer Name"></x-forms.input>
        <x-forms.input name="logo" label="Employer Logo" type="file"></x-forms.input>
        <div class=" flex  justify-end">
            <x-forms.button>Create Account</x-forms.button>

        </div>

   </x-forms.form>
</x-layout>
