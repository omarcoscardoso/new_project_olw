<x-app-layout>
    <div class="bg-tertiary-900">
        <!-- Background color split screen for large screens -->
        <div class="fixed left-0 top-0 hidden h-full w-1/2 bg-tertiary-900 lg:block" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden h-full w-1/2 bg-tertiary-800 lg:block" aria-hidden="true"></div>


        <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">

            <section aria-labelledby="summary-heading" class="bg-tertiary-800 py-12 text-indigo-300 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">

                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">

                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item 
                            name="High Wall Tote"
                            price="210,00"
                            :features="[
                                'White and black',
                                '15L',
                            ]"
                            image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                        />
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                       
                        <x-checkout.summary-item title="Subtotal" value="570,00" />
                        <x-checkout.summary-item title="Frete" value="50,00" />
                        <x-checkout.summary-item title="Total" value="620,00" :is-last="true" />

                    </dl>
                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading" class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informações de Contato" />    

                            <div class="mt-6">
                                <x-input-label for="email-address"  value="Email address" />
                                <div class="mt-1">
                                    <x-text-input 
                                        type="email" 
                                        id="email-address" 
                                        name="email-address" 
                                        autocomplete="email"
                                        placeholder="Digite seu email"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-section-title title="Detalhes do pagamento" />

                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <x-input-label for="card-number" value="Número do Cartão" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="card-number" 
                                            name="card-number" 
                                            placeholder="Número do Cartão"
                                        />
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <x-input-label for="expiration-date" value="Data de Validade" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="expiration-date" 
                                            name="expiration-date" 
                                            placeholder="MM / AA"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="cvc" value="CVC" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="cvc" 
                                            name="cvc" 
                                            placeholder="CVC"
                                        />
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-section-title title="Endereço" />

                            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <x-input-label for="rua" value="Rua" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="address" 
                                            name="address"
                                            autocomplete="street-address"
                                            placeholder=""
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="city" value="Cidade" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="city" 
                                            name="city"
                                            autocomplete="address-level2"
                                            placeholder=""
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="region" value="Estado" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="region" 
                                            name="region"
                                            autocomplete="address-level1"
                                            placeholder=""
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="postal-code" value="CEP" />
                                    <div class="mt-1">
                                        <x-text-input 
                                            type="text" 
                                            id="postal-code" 
                                            name="postal-code"
                                            autocomplete="postal-code"
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end border-t border-tertiary-800-200 pt-6">
                            <button type="submit" class="rounded-md border border-transparent bg-primary-200 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50">
                                Comprar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>