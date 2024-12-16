<x-guestLayout>
    <form action="/apload/store" method="POST">
        @csrf
        Nome: <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        <br>
        Slug: <input type="text" name="slug" value="{{ old('slug') }}"><br>
        @error('slug')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
        {{-- Image: <input type="file" name="image" value="{{ old('image') }}">
        @error('image')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror --}}
        <br>
        Descrição breve: <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror

        <br>        
        <label for="CP">Categoria principal:</label>
            <select name="CP" id="CP">
                <option value="acao">Ação</option>
                <option value="comedia">Comedia</option>
                <option value="horror">Horror</option>
                <option value="romance">Romance</option>
                <option value="animacao"
            </select>
        <x-button>Criar</x-button>
    </form>

    {{-- <link rel="stylesheet" href="{{ asset('css/testess.css') }}">
    <form class="form">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
            <label>
                <input class="input" type="text" placeholder="" required="">
                <span>Firstname</span>
            </label>

            <label>
                <input class="input" type="text" placeholder="" required="">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input class="input" type="email" placeholder="" required="">
            <span>Email</span>
        </label> 
            
        <label>
            <input class="input" type="password" placeholder="" required="">
            <span>Password</span>
        </label>
        <label>
            <input class="input" type="password" placeholder="" required="">
            <span>Confirm password</span>
        </label>
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
    </form>
    
    procurar mais no tailwindflex ou uiverse.io--}}
</x-guestLayout>