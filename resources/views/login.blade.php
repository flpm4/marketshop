<x-layout_base>

<div class='justify-center flex itens-center min-h-screen'>
<div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm darka:bg-neutral-900 darka:border-neutral-700">
  <div class="p-4 sm:p-7">
    <div class="text-center">
      <h1 class="block text-2xl font-bold text-gray-800 darka:text-white">Sign in</h1>
      <p class="mt-2 text-sm text-gray-600 darka:text-neutral-400">
        Não tem conta ainda?
        <a class="text-blue-600 decoration-2 hover:underline font-medium darka:text-blue-500" href="/cria-conta">
          Cadastre-se aqui
        </a>
      </p>
    </div>

    <div class="mt-5">
      

      <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 darka:text-neutral-500 darka:before:border-neutral-600 darka:after:border-neutral-600"></div>

      <!-- Form -->
      <form action="{{route('logar')}}" method="POST">
        @csrf
        <div class="grid gap-y-4">
          <!-- Form Group -->
          <div>
            <label for="email" class="block text-sm mb-2 darka:text-white">Coloque o email</label>
            <div class="relative">
              <input type="email" id="email" name="email" class="py-3 border px-4 block w-full border-gray-400 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none darka:bg-neutral-900 darka:border-neutral-700 darka:text-neutral-400 darka:placeholder-neutral-500 darka:focus:ring-neutral-600" required aria-describedby="email-error">
              <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
              </div>
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="email-error">Por favor coloque um email válido para prosseguirmos</p>
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div>
            <div class="flex justify-between items-center">
              <label for="senha" class="block text-sm mb-2 darka:text-white">Senha</label>
              <a class="text-sm text-blue-600 decoration-2 hover:underline font-medium" href="../examples/html/recover-account.html">Esqueceu a senha?</a>
            </div>
            <div class="relative">
              <input type="password" id="password" name="senha" class="py-3 px-4 block w-full border border-gray-400 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none darka:bg-neutral-900 darka:border-neutral-700 darka:text-neutral-400 darka:placeholder-neutral-500 darka:focus:ring-neutral-600" required aria-describedby="password-error">
              <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
              </div>
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ caractéres requeridos</p>
          </div>
          <!-- End Form Group -->

          <!-- Checkbox -->
          <div class="flex items-center">
            <div class="flex">
              <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 darka:bg-neutral-800 darka:border-neutral-700 darka:checked:bg-blue-500 darka:checked:border-blue-500 darka:focus:ring-offset-gray-800">
            </div>
            <div class="ms-3">
              <label for="remember-me" class="text-sm darka:text-white">Lembrar-me</label>
            </div>
          </div>
          <!-- End Checkbox -->

          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Logar</button>
        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
</div>
</div>
</x-layout_base>