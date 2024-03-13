<div class="toast-wrapper toast-container fixed-top top-0 w-100 p-4 d-flex justify-content-md-end justify-content-center" data-controller="toast">
    <template id="toast">
        <div class="toast rounded shadow-sm bg-body-tertiary mb-3"
             role="alert"
             aria-live="assertive"
             aria-atomic="true"
             data-bs-delay="5000"
             data-bs-autohide="true">
            <div class="toast-body p-3 d-flex">
                <p class="mb-0">
                    <span class="text-{type}">
                        <x-orchid-icon path="i.circle-fill" class="me-2"/>
                    </span>
                    {message}
                </p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </template>

    @if (session()->has(\Orchid\Alert\Toast::SESSION_MESSAGE))
        <div class="toast border-0 rounded shadow-sm bg-body-tertiary mb-3" role="alert" aria-live="assertive" aria-atomic="true"
             data-bs-delay="{{ session(\Orchid\Alert\Toast::SESSION_DELAY) }}"
             data-bs-autohide="{{ session(\Orchid\Alert\Toast::SESSION_AUTO_HIDE) }}"
             data-turbo-temporary
        >
            <div class="toast-body p-3 d-flex">
                <p class="mb-0 me-1">
                    <span class="text-{{ session(\Orchid\Alert\Toast::SESSION_LEVEL) }}">
                        <x-orchid-icon path="i.circle-fill" class="me-2"/>
                    </span>

                    {!! session(\Orchid\Alert\Toast::SESSION_MESSAGE) !!}
                </p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif

</div>

