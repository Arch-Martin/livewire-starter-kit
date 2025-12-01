<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-brand-dark font-heading uppercase">Contacto</h2>
        <p class="mt-1 text-gray-600 font-body">¿Tienes alguna duda? Estamos aquí para ayudarte.</p>
    </div>

    <div class="mt-12 max-w-lg mx-auto">
        <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 bg-white shadow-sm">
            <h2 class="mb-8 text-xl font-semibold text-gray-800 font-heading uppercase">
                Envíanos un mensaje
            </h2>

            <form>
                <div class="grid gap-4 lg:gap-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                        <div>
                            <label for="firstname" class="block text-sm font-medium text-gray-700 font-heading uppercase">Nombre</label>
                            <input type="text" name="firstname" id="firstname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-brand-orange focus:ring-brand-orange border">
                        </div>
                        <div>
                            <label for="lastname" class="block text-sm font-medium text-gray-700 font-heading uppercase">Apellido</label>
                            <input type="text" name="lastname" id="lastname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-brand-orange focus:ring-brand-orange border">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 font-heading uppercase">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-brand-orange focus:ring-brand-orange border">
                    </div>

                    <div>
                        <label for="details" class="block text-sm font-medium text-gray-700 font-heading uppercase">Mensaje</label>
                        <textarea id="details" name="details" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-brand-orange focus:ring-brand-orange border"></textarea>
                    </div>
                </div>

                <div class="mt-6 grid">
                    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-brand-orange text-white hover:bg-orange-600 disabled:opacity-50 disabled:pointer-events-none font-heading uppercase">
                        Enviar mensaje
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
