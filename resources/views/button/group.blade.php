<div class="flex collapse-buttons">
    {{ $slot }}
</div>
{{--
TODO: This is the CSS required to make the group component work
.collapse-buttons button:first-child {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.collapse-buttons button:focus {
    z-index: 49;
}
.collapse-buttons button.rounded-sm:focus {
    border-radius: theme('borderRadius.sm') !important;
}

.collapse-buttons button.rounded:focus {
    border-radius: theme('borderRadius.DEFAULT') !important;
}

.collapse-buttons button.rounded-md:focus {
    border-radius: theme('borderRadius.md') !important;
}

.collapse-buttons button.rounded-lg:focus {
    border-radius: theme('borderRadius.lg') !important;
}

.collapse-buttons button.rounded-xl:focus {
    border-radius: theme('borderRadius.xl') !important;
}

.collapse-buttons button.rounded-2xl:focus {
    border-radius: theme('borderRadius.2xl') !important;
}

.collapse-buttons button.rounded-3xl:focus {
    border-radius: theme('borderRadius.3xl') !important;
}

.collapse-buttons button.rounded-full:focus {
    border-radius: theme('borderRadius.full') !important;
}

.collapse-buttons button:not(:first-child):not(:last-child) {
    border-radius: 0;
}

.collapse-buttons button:last-child {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
}
--}}
