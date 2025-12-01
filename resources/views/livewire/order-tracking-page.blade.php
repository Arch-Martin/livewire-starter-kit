<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-brand-dark font-heading uppercase">Seguimiento de Compras</h2>
        <p class="mt-1 text-gray-600 font-body">Ingresa tu número de pedido para ver el estado.</p>
    </div>

    <div class="mt-12 max-w-lg mx-auto">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 sm:p-7">
            <div class="text-center">
                <h2 class="block text-2xl font-bold text-gray-800 font-heading uppercase">Rastrear Pedido</h2>
            </div>

            <div class="mt-5">
                <form>
                    <div class="grid gap-y-4">
                        <div>
                            <label for="order_number" class="block text-sm mb-2 font-heading uppercase">Número de Pedido</label>
                            <div class="relative">
                                <input type="text" id="order_number" name="order_number" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-brand-orange focus:ring-brand-orange disabled:opacity-50 disabled:pointer-events-none border" required placeholder="Ej: #12345">
                            </div>
                        </div>
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-brand-orange text-white hover:bg-orange-600 disabled:opacity-50 disabled:pointer-events-none font-heading uppercase">
                            Rastrear
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
