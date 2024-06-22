<x-layout>
    <x-page-header>Login Page</x-page-header>
    <x-forms.form  method="POST" action="/login" >

         <x-forms.input name="email" label="Your Email" type="email"></x-forms.input>
         <x-forms.input name="password" label="Your Password" type="password"></x-forms.input>
         <div class=" flex  justify-end">
             <x-forms.button>Log In </x-forms.button>

         </div>

    </x-forms.form>
 </x-layout>
