@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Icons',
        'Bootstrap',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Bootstrap Icons" :breadcrumbs="$breadcrumbs">
        <p>
            Use the following pattern to add the Bootstrap icons to anywhere in your project. <code>&lt;i class="bi <strong>alarm-fille</strong>"&gt;&lt;/i&gt;</code> Replace the bold part with the below icon names.
            Check the <a href="https://icons.getbootstrap.com/" target="_blank">Official website</a> for more info.
        </p>

        <div class="iconslist">
            <div class="icon">
                <x-icon name="bi-alarm-fill" />
                <div class="label">alarm-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-alarm" />
                <div class="label">alarm</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-bottom" />
                <div class="label">align-bottom</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-center" />
                <div class="label">align-center</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-end" />
                <div class="label">align-end</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-middle" />
                <div class="label">align-middle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-start" />
                <div class="label">align-start</div>
            </div>
            <div class="icon">
                <x-icon name="bi-align-top" />
                <div class="label">align-top</div>
            </div>
            <div class="icon">
                <x-icon name="bi-alt" />
                <div class="label">alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-app-indicator" />
                <div class="label">app-indicator</div>
            </div>
            <div class="icon">
                <x-icon name="bi-app" />
                <div class="label">app</div>
            </div>
            <div class="icon">
                <x-icon name="bi-archive-fill" />
                <div class="label">archive-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-archive" />
                <div class="label">archive</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-90deg-down" />
                <div class="label">arrow-90deg-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-90deg-left" />
                <div class="label">arrow-90deg-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-90deg-right" />
                <div class="label">arrow-90deg-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-90deg-up" />
                <div class="label">arrow-90deg-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-bar-down" />
                <div class="label">arrow-bar-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-bar-left" />
                <div class="label">arrow-bar-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-bar-right" />
                <div class="label">arrow-bar-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-bar-up" />
                <div class="label">arrow-bar-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-clockwise" />
                <div class="label">arrow-clockwise</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-counterclockwise" />
                <div class="label">arrow-counterclockwise</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-circle-fill" />
                <div class="label">arrow-down-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-circle" />
                <div class="label">arrow-down-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-left-circle-fill" />
                <div class="label">arrow-down-left-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-left-circle" />
                <div class="label">arrow-down-left-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-left-square-fill" />
                <div class="label">arrow-down-left-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-left-square" />
                <div class="label">arrow-down-left-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-left" />
                <div class="label">arrow-down-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-right-circle-fill" />
                <div class="label">arrow-down-right-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-right-circle" />
                <div class="label">arrow-down-right-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-right-square-fill" />
                <div class="label">arrow-down-right-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-right-square" />
                <div class="label">arrow-down-right-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-right" />
                <div class="label">arrow-down-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-short" />
                <div class="label">arrow-down-short</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-square-fill" />
                <div class="label">arrow-down-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-square" />
                <div class="label">arrow-down-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down-up" />
                <div class="label">arrow-down-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-down" />
                <div class="label">arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-circle-fill" />
                <div class="label">arrow-left-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-circle" />
                <div class="label">arrow-left-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-right" />
                <div class="label">arrow-left-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-short" />
                <div class="label">arrow-left-short</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-square-fill" />
                <div class="label">arrow-left-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left-square" />
                <div class="label">arrow-left-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-left" />
                <div class="label">arrow-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-repeat" />
                <div class="label">arrow-repeat</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-return-left" />
                <div class="label">arrow-return-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-return-right" />
                <div class="label">arrow-return-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right-circle-fill" />
                <div class="label">arrow-right-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right-circle" />
                <div class="label">arrow-right-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right-short" />
                <div class="label">arrow-right-short</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right-square-fill" />
                <div class="label">arrow-right-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right-square" />
                <div class="label">arrow-right-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-right" />
                <div class="label">arrow-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-circle-fill" />
                <div class="label">arrow-up-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-circle" />
                <div class="label">arrow-up-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-left-circle-fill" />
                <div class="label">arrow-up-left-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-left-circle" />
                <div class="label">arrow-up-left-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-left-square-fill" />
                <div class="label">arrow-up-left-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-left-square" />
                <div class="label">arrow-up-left-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-left" />
                <div class="label">arrow-up-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-right-circle-fill" />
                <div class="label">arrow-up-right-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-right-circle" />
                <div class="label">arrow-up-right-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-right-square-fill" />
                <div class="label">arrow-up-right-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-right-square" />
                <div class="label">arrow-up-right-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-right" />
                <div class="label">arrow-up-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-short" />
                <div class="label">arrow-up-short</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-square-fill" />
                <div class="label">arrow-up-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up-square" />
                <div class="label">arrow-up-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrow-up" />
                <div class="label">arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-angle-contract" />
                <div class="label">arrows-angle-contract</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-angle-expand" />
                <div class="label">arrows-angle-expand</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-collapse" />
                <div class="label">arrows-collapse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-expand" />
                <div class="label">arrows-expand</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-fullscreen" />
                <div class="label">arrows-fullscreen</div>
            </div>
            <div class="icon">
                <x-icon name="bi-arrows-move" />
                <div class="label">arrows-move</div>
            </div>
            <div class="icon">
                <x-icon name="bi-aspect-ratio-fill" />
                <div class="label">aspect-ratio-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-aspect-ratio" />
                <div class="label">aspect-ratio</div>
            </div>
            <div class="icon">
                <x-icon name="bi-asterisk" />
                <div class="label">asterisk</div>
            </div>
            <div class="icon">
                <x-icon name="bi-at" />
                <div class="label">at</div>
            </div>
            <div class="icon">
                <x-icon name="bi-award-fill" />
                <div class="label">award-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-award" />
                <div class="label">award</div>
            </div>
            <div class="icon">
                <x-icon name="bi-back" />
                <div class="label">back</div>
            </div>
            <div class="icon">
                <x-icon name="bi-backspace-fill" />
                <div class="label">backspace-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-backspace-reverse-fill" />
                <div class="label">backspace-reverse-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-backspace-reverse" />
                <div class="label">backspace-reverse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-backspace" />
                <div class="label">backspace</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-3d-fill" />
                <div class="label">badge-3d-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-3d" />
                <div class="label">badge-3d</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-4k-fill" />
                <div class="label">badge-4k-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-4k" />
                <div class="label">badge-4k</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-8k-fill" />
                <div class="label">badge-8k-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-8k" />
                <div class="label">badge-8k</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-ad-fill" />
                <div class="label">badge-ad-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-ad" />
                <div class="label">badge-ad</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-ar-fill" />
                <div class="label">badge-ar-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-ar" />
                <div class="label">badge-ar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-cc-fill" />
                <div class="label">badge-cc-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-cc" />
                <div class="label">badge-cc</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-hd-fill" />
                <div class="label">badge-hd-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-hd" />
                <div class="label">badge-hd</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-tm-fill" />
                <div class="label">badge-tm-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-tm" />
                <div class="label">badge-tm</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-vo-fill" />
                <div class="label">badge-vo-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-vo" />
                <div class="label">badge-vo</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-vr-fill" />
                <div class="label">badge-vr-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-vr" />
                <div class="label">badge-vr</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-wc-fill" />
                <div class="label">badge-wc-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-badge-wc" />
                <div class="label">badge-wc</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-check-fill" />
                <div class="label">bag-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-check" />
                <div class="label">bag-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-dash-fill" />
                <div class="label">bag-dash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-dash" />
                <div class="label">bag-dash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-fill" />
                <div class="label">bag-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-plus-fill" />
                <div class="label">bag-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-plus" />
                <div class="label">bag-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-x-fill" />
                <div class="label">bag-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag-x" />
                <div class="label">bag-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bag" />
                <div class="label">bag</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bank" />
                <div class="label">bank</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bank2" />
                <div class="label">bank2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bar-chart-fill" />
                <div class="label">bar-chart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bar-chart-line-fill" />
                <div class="label">bar-chart-line-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bar-chart-line" />
                <div class="label">bar-chart-line</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bar-chart-steps" />
                <div class="label">bar-chart-steps</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bar-chart" />
                <div class="label">bar-chart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket-fill" />
                <div class="label">basket-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket" />
                <div class="label">basket</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket2-fill" />
                <div class="label">basket2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket2" />
                <div class="label">basket2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket3-fill" />
                <div class="label">basket3-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-basket3" />
                <div class="label">basket3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-battery-charging" />
                <div class="label">battery-charging</div>
            </div>
            <div class="icon">
                <x-icon name="bi-battery-full" />
                <div class="label">battery-full</div>
            </div>
            <div class="icon">
                <x-icon name="bi-battery-half" />
                <div class="label">battery-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-battery" />
                <div class="label">battery</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bell-fill" />
                <div class="label">bell-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bell-slash-fill" />
                <div class="label">bell-slash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bell-slash" />
                <div class="label">bell-slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bell" />
                <div class="label">bell</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bezier" />
                <div class="label">bezier</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bezier2" />
                <div class="label">bezier2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bicycle" />
                <div class="label">bicycle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-binoculars-fill" />
                <div class="label">binoculars-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-binoculars" />
                <div class="label">binoculars</div>
            </div>
            <div class="icon">
                <x-icon name="bi-blockquote-left" />
                <div class="label">blockquote-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-blockquote-right" />
                <div class="label">blockquote-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-book-fill" />
                <div class="label">book-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-book-half" />
                <div class="label">book-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-book" />
                <div class="label">book</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-check-fill" />
                <div class="label">bookmark-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-check" />
                <div class="label">bookmark-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-dash-fill" />
                <div class="label">bookmark-dash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-dash" />
                <div class="label">bookmark-dash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-fill" />
                <div class="label">bookmark-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-heart-fill" />
                <div class="label">bookmark-heart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-heart" />
                <div class="label">bookmark-heart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-plus-fill" />
                <div class="label">bookmark-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-plus" />
                <div class="label">bookmark-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-star-fill" />
                <div class="label">bookmark-star-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-star" />
                <div class="label">bookmark-star</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-x-fill" />
                <div class="label">bookmark-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark-x" />
                <div class="label">bookmark-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmark" />
                <div class="label">bookmark</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmarks-fill" />
                <div class="label">bookmarks-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookmarks" />
                <div class="label">bookmarks</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bookshelf" />
                <div class="label">bookshelf</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bootstrap-fill" />
                <div class="label">bootstrap-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bootstrap-reboot" />
                <div class="label">bootstrap-reboot</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bootstrap" />
                <div class="label">bootstrap</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-all" />
                <div class="label">border-all</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-bottom" />
                <div class="label">border-bottom</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-center" />
                <div class="label">border-center</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-inner" />
                <div class="label">border-inner</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-left" />
                <div class="label">border-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-middle" />
                <div class="label">border-middle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-outer" />
                <div class="label">border-outer</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-right" />
                <div class="label">border-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-style" />
                <div class="label">border-style</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-top" />
                <div class="label">border-top</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border-width" />
                <div class="label">border-width</div>
            </div>
            <div class="icon">
                <x-icon name="bi-border" />
                <div class="label">border</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bounding-box-circles" />
                <div class="label">bounding-box-circles</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bounding-box" />
                <div class="label">bounding-box</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-down-left" />
                <div class="label">box-arrow-down-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-down-right" />
                <div class="label">box-arrow-down-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-down" />
                <div class="label">box-arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-down-left" />
                <div class="label">box-arrow-in-down-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-down-right" />
                <div class="label">box-arrow-in-down-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-down" />
                <div class="label">box-arrow-in-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-left" />
                <div class="label">box-arrow-in-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-right" />
                <div class="label">box-arrow-in-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-up-left" />
                <div class="label">box-arrow-in-up-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-up-right" />
                <div class="label">box-arrow-in-up-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-in-up" />
                <div class="label">box-arrow-in-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-left" />
                <div class="label">box-arrow-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-right" />
                <div class="label">box-arrow-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-up-left" />
                <div class="label">box-arrow-up-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-up-right" />
                <div class="label">box-arrow-up-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-arrow-up" />
                <div class="label">box-arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box-seam" />
                <div class="label">box-seam</div>
            </div>
            <div class="icon">
                <x-icon name="bi-box" />
                <div class="label">box</div>
            </div>
            <div class="icon">
                <x-icon name="bi-braces" />
                <div class="label">braces</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bricks" />
                <div class="label">bricks</div>
            </div>
            <div class="icon">
                <x-icon name="bi-briefcase-fill" />
                <div class="label">briefcase-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-briefcase" />
                <div class="label">briefcase</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-alt-high-fill" />
                <div class="label">brightness-alt-high-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-alt-high" />
                <div class="label">brightness-alt-high</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-alt-low-fill" />
                <div class="label">brightness-alt-low-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-alt-low" />
                <div class="label">brightness-alt-low</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-high-fill" />
                <div class="label">brightness-high-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-high" />
                <div class="label">brightness-high</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-low-fill" />
                <div class="label">brightness-low-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brightness-low" />
                <div class="label">brightness-low</div>
            </div>
            <div class="icon">
                <x-icon name="bi-broadcast-pin" />
                <div class="label">broadcast-pin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-broadcast" />
                <div class="label">broadcast</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brush-fill" />
                <div class="label">brush-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-brush" />
                <div class="label">brush</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bucket-fill" />
                <div class="label">bucket-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bucket" />
                <div class="label">bucket</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bug-fill" />
                <div class="label">bug-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bug" />
                <div class="label">bug</div>
            </div>
            <div class="icon">
                <x-icon name="bi-building" />
                <div class="label">building</div>
            </div>
            <div class="icon">
                <x-icon name="bi-bullseye" />
                <div class="label">bullseye</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calculator-fill" />
                <div class="label">calculator-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calculator" />
                <div class="label">calculator</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-check-fill" />
                <div class="label">calendar-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-check" />
                <div class="label">calendar-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-date-fill" />
                <div class="label">calendar-date-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-date" />
                <div class="label">calendar-date</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-day-fill" />
                <div class="label">calendar-day-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-day" />
                <div class="label">calendar-day</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-event-fill" />
                <div class="label">calendar-event-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-event" />
                <div class="label">calendar-event</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-fill" />
                <div class="label">calendar-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-minus-fill" />
                <div class="label">calendar-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-minus" />
                <div class="label">calendar-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-month-fill" />
                <div class="label">calendar-month-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-month" />
                <div class="label">calendar-month</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-plus-fill" />
                <div class="label">calendar-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-plus" />
                <div class="label">calendar-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-range-fill" />
                <div class="label">calendar-range-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-range" />
                <div class="label">calendar-range</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-week-fill" />
                <div class="label">calendar-week-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-week" />
                <div class="label">calendar-week</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-x-fill" />
                <div class="label">calendar-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar-x" />
                <div class="label">calendar-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar" />
                <div class="label">calendar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-check-fill" />
                <div class="label">calendar2-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-check" />
                <div class="label">calendar2-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-date-fill" />
                <div class="label">calendar2-date-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-date" />
                <div class="label">calendar2-date</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-day-fill" />
                <div class="label">calendar2-day-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-day" />
                <div class="label">calendar2-day</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-event-fill" />
                <div class="label">calendar2-event-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-event" />
                <div class="label">calendar2-event</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-fill" />
                <div class="label">calendar2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-minus-fill" />
                <div class="label">calendar2-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-minus" />
                <div class="label">calendar2-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-month-fill" />
                <div class="label">calendar2-month-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-month" />
                <div class="label">calendar2-month</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-plus-fill" />
                <div class="label">calendar2-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-plus" />
                <div class="label">calendar2-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-range-fill" />
                <div class="label">calendar2-range-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-range" />
                <div class="label">calendar2-range</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-week-fill" />
                <div class="label">calendar2-week-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-week" />
                <div class="label">calendar2-week</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-x-fill" />
                <div class="label">calendar2-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2-x" />
                <div class="label">calendar2-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar2" />
                <div class="label">calendar2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-event-fill" />
                <div class="label">calendar3-event-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-event" />
                <div class="label">calendar3-event</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-fill" />
                <div class="label">calendar3-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-range-fill" />
                <div class="label">calendar3-range-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-range" />
                <div class="label">calendar3-range</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-week-fill" />
                <div class="label">calendar3-week-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3-week" />
                <div class="label">calendar3-week</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar3" />
                <div class="label">calendar3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar4-event" />
                <div class="label">calendar4-event</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar4-range" />
                <div class="label">calendar4-range</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar4-week" />
                <div class="label">calendar4-week</div>
            </div>
            <div class="icon">
                <x-icon name="bi-calendar4" />
                <div class="label">calendar4</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-fill" />
                <div class="label">camera-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-reels-fill" />
                <div class="label">camera-reels-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-reels" />
                <div class="label">camera-reels</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-video-fill" />
                <div class="label">camera-video-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-video-off-fill" />
                <div class="label">camera-video-off-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-video-off" />
                <div class="label">camera-video-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera-video" />
                <div class="label">camera-video</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera" />
                <div class="label">camera</div>
            </div>
            <div class="icon">
                <x-icon name="bi-camera2" />
                <div class="label">camera2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-capslock-fill" />
                <div class="label">capslock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-capslock" />
                <div class="label">capslock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-card-checklist" />
                <div class="label">card-checklist</div>
            </div>
            <div class="icon">
                <x-icon name="bi-card-heading" />
                <div class="label">card-heading</div>
            </div>
            <div class="icon">
                <x-icon name="bi-card-image" />
                <div class="label">card-image</div>
            </div>
            <div class="icon">
                <x-icon name="bi-card-list" />
                <div class="label">card-list</div>
            </div>
            <div class="icon">
                <x-icon name="bi-card-text" />
                <div class="label">card-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-down-fill" />
                <div class="label">caret-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-down-square-fill" />
                <div class="label">caret-down-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-down-square" />
                <div class="label">caret-down-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-down" />
                <div class="label">caret-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-left-fill" />
                <div class="label">caret-left-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-left-square-fill" />
                <div class="label">caret-left-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-left-square" />
                <div class="label">caret-left-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-left" />
                <div class="label">caret-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-right-fill" />
                <div class="label">caret-right-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-right-square-fill" />
                <div class="label">caret-right-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-right-square" />
                <div class="label">caret-right-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-right" />
                <div class="label">caret-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-up-fill" />
                <div class="label">caret-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-up-square-fill" />
                <div class="label">caret-up-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-up-square" />
                <div class="label">caret-up-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-caret-up" />
                <div class="label">caret-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-check-fill" />
                <div class="label">cart-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-check" />
                <div class="label">cart-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-dash-fill" />
                <div class="label">cart-dash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-dash" />
                <div class="label">cart-dash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-fill" />
                <div class="label">cart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-plus-fill" />
                <div class="label">cart-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-plus" />
                <div class="label">cart-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-x-fill" />
                <div class="label">cart-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart-x" />
                <div class="label">cart-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart" />
                <div class="label">cart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart2" />
                <div class="label">cart2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart3" />
                <div class="label">cart3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cart4" />
                <div class="label">cart4</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cash-coin" />
                <div class="label">cash-coin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cash-stack" />
                <div class="label">cash-stack</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cash" />
                <div class="label">cash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cast" />
                <div class="label">cast</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-dots-fill" />
                <div class="label">chat-dots-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-dots" />
                <div class="label">chat-dots</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-fill" />
                <div class="label">chat-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-dots-fill" />
                <div class="label">chat-left-dots-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-dots" />
                <div class="label">chat-left-dots</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-fill" />
                <div class="label">chat-left-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-quote-fill" />
                <div class="label">chat-left-quote-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-quote" />
                <div class="label">chat-left-quote</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-text-fill" />
                <div class="label">chat-left-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left-text" />
                <div class="label">chat-left-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-left" />
                <div class="label">chat-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-quote-fill" />
                <div class="label">chat-quote-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-quote" />
                <div class="label">chat-quote</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-dots-fill" />
                <div class="label">chat-right-dots-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-dots" />
                <div class="label">chat-right-dots</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-fill" />
                <div class="label">chat-right-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-quote-fill" />
                <div class="label">chat-right-quote-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-quote" />
                <div class="label">chat-right-quote</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-text-fill" />
                <div class="label">chat-right-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right-text" />
                <div class="label">chat-right-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-right" />
                <div class="label">chat-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-dots-fill" />
                <div class="label">chat-square-dots-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-dots" />
                <div class="label">chat-square-dots</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-fill" />
                <div class="label">chat-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-quote-fill" />
                <div class="label">chat-square-quote-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-quote" />
                <div class="label">chat-square-quote</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-text-fill" />
                <div class="label">chat-square-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square-text" />
                <div class="label">chat-square-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-square" />
                <div class="label">chat-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-text-fill" />
                <div class="label">chat-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat-text" />
                <div class="label">chat-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chat" />
                <div class="label">chat</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-all" />
                <div class="label">check-all</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-circle-fill" />
                <div class="label">check-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-circle" />
                <div class="label">check-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-lg" />
                <div class="label">check-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-square-fill" />
                <div class="label">check-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check-square" />
                <div class="label">check-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check" />
                <div class="label">check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check2-all" />
                <div class="label">check2-all</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check2-circle" />
                <div class="label">check2-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check2-square" />
                <div class="label">check2-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-check2" />
                <div class="label">check2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-contract" />
                <div class="label">chevron-bar-contract</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-down" />
                <div class="label">chevron-bar-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-expand" />
                <div class="label">chevron-bar-expand</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-left" />
                <div class="label">chevron-bar-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-right" />
                <div class="label">chevron-bar-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-bar-up" />
                <div class="label">chevron-bar-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-compact-down" />
                <div class="label">chevron-compact-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-compact-left" />
                <div class="label">chevron-compact-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-compact-right" />
                <div class="label">chevron-compact-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-compact-up" />
                <div class="label">chevron-compact-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-contract" />
                <div class="label">chevron-contract</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-double-down" />
                <div class="label">chevron-double-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-double-left" />
                <div class="label">chevron-double-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-double-right" />
                <div class="label">chevron-double-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-double-up" />
                <div class="label">chevron-double-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-down" />
                <div class="label">chevron-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-expand" />
                <div class="label">chevron-expand</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-left" />
                <div class="label">chevron-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-right" />
                <div class="label">chevron-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-chevron-up" />
                <div class="label">chevron-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-circle-fill" />
                <div class="label">circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-circle-half" />
                <div class="label">circle-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-circle-square" />
                <div class="label">circle-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-circle" />
                <div class="label">circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard-check" />
                <div class="label">clipboard-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard-data" />
                <div class="label">clipboard-data</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard-minus" />
                <div class="label">clipboard-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard-plus" />
                <div class="label">clipboard-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard-x" />
                <div class="label">clipboard-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clipboard" />
                <div class="label">clipboard</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clock-fill" />
                <div class="label">clock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clock-history" />
                <div class="label">clock-history</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clock" />
                <div class="label">clock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-arrow-down-fill" />
                <div class="label">cloud-arrow-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-arrow-down" />
                <div class="label">cloud-arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-arrow-up-fill" />
                <div class="label">cloud-arrow-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-arrow-up" />
                <div class="label">cloud-arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-check-fill" />
                <div class="label">cloud-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-check" />
                <div class="label">cloud-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-download-fill" />
                <div class="label">cloud-download-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-download" />
                <div class="label">cloud-download</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-drizzle-fill" />
                <div class="label">cloud-drizzle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-drizzle" />
                <div class="label">cloud-drizzle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-fill" />
                <div class="label">cloud-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-fog-fill" />
                <div class="label">cloud-fog-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-fog" />
                <div class="label">cloud-fog</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-fog2-fill" />
                <div class="label">cloud-fog2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-fog2" />
                <div class="label">cloud-fog2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-hail-fill" />
                <div class="label">cloud-hail-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-hail" />
                <div class="label">cloud-hail</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-haze-1" />
                <div class="label">cloud-haze-1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-haze-fill" />
                <div class="label">cloud-haze-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-haze" />
                <div class="label">cloud-haze</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-haze2-fill" />
                <div class="label">cloud-haze2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-lightning-fill" />
                <div class="label">cloud-lightning-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-lightning-rain-fill" />
                <div class="label">cloud-lightning-rain-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-lightning-rain" />
                <div class="label">cloud-lightning-rain</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-lightning" />
                <div class="label">cloud-lightning</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-minus-fill" />
                <div class="label">cloud-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-minus" />
                <div class="label">cloud-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-moon-fill" />
                <div class="label">cloud-moon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-moon" />
                <div class="label">cloud-moon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-plus-fill" />
                <div class="label">cloud-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-plus" />
                <div class="label">cloud-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-rain-fill" />
                <div class="label">cloud-rain-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-rain-heavy-fill" />
                <div class="label">cloud-rain-heavy-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-rain-heavy" />
                <div class="label">cloud-rain-heavy</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-rain" />
                <div class="label">cloud-rain</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-slash-fill" />
                <div class="label">cloud-slash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-slash" />
                <div class="label">cloud-slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-sleet-fill" />
                <div class="label">cloud-sleet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-sleet" />
                <div class="label">cloud-sleet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-snow-fill" />
                <div class="label">cloud-snow-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-snow" />
                <div class="label">cloud-snow</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-sun-fill" />
                <div class="label">cloud-sun-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-sun" />
                <div class="label">cloud-sun</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-upload-fill" />
                <div class="label">cloud-upload-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud-upload" />
                <div class="label">cloud-upload</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloud" />
                <div class="label">cloud</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clouds-fill" />
                <div class="label">clouds-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-clouds" />
                <div class="label">clouds</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloudy-fill" />
                <div class="label">cloudy-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cloudy" />
                <div class="label">cloudy</div>
            </div>
            <div class="icon">
                <x-icon name="bi-code-slash" />
                <div class="label">code-slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-code-square" />
                <div class="label">code-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-code" />
                <div class="label">code</div>
            </div>
            <div class="icon">
                <x-icon name="bi-coin" />
                <div class="label">coin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-collection-fill" />
                <div class="label">collection-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-collection-play-fill" />
                <div class="label">collection-play-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-collection-play" />
                <div class="label">collection-play</div>
            </div>
            <div class="icon">
                <x-icon name="bi-collection" />
                <div class="label">collection</div>
            </div>
            <div class="icon">
                <x-icon name="bi-columns-gap" />
                <div class="label">columns-gap</div>
            </div>
            <div class="icon">
                <x-icon name="bi-columns" />
                <div class="label">columns</div>
            </div>
            <div class="icon">
                <x-icon name="bi-command" />
                <div class="label">command</div>
            </div>
            <div class="icon">
                <x-icon name="bi-compass-fill" />
                <div class="label">compass-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-compass" />
                <div class="label">compass</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cone-striped" />
                <div class="label">cone-striped</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cone" />
                <div class="label">cone</div>
            </div>
            <div class="icon">
                <x-icon name="bi-controller" />
                <div class="label">controller</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cpu-fill" />
                <div class="label">cpu-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cpu" />
                <div class="label">cpu</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card-2-back-fill" />
                <div class="label">credit-card-2-back-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card-2-back" />
                <div class="label">credit-card-2-back</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card-2-front-fill" />
                <div class="label">credit-card-2-front-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card-2-front" />
                <div class="label">credit-card-2-front</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card-fill" />
                <div class="label">credit-card-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-credit-card" />
                <div class="label">credit-card</div>
            </div>
            <div class="icon">
                <x-icon name="bi-crop" />
                <div class="label">crop</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cup-fill" />
                <div class="label">cup-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cup-straw" />
                <div class="label">cup-straw</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cup" />
                <div class="label">cup</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-bitcoin" />
                <div class="label">currency-bitcoin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-dollar" />
                <div class="label">currency-dollar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-euro" />
                <div class="label">currency-euro</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-exchange" />
                <div class="label">currency-exchange</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-pound" />
                <div class="label">currency-pound</div>
            </div>
            <div class="icon">
                <x-icon name="bi-currency-yen" />
                <div class="label">currency-yen</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cursor-fill" />
                <div class="label">cursor-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cursor-text" />
                <div class="label">cursor-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-cursor" />
                <div class="label">cursor</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-circle-dotted" />
                <div class="label">dash-circle-dotted</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-circle-fill" />
                <div class="label">dash-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-circle" />
                <div class="label">dash-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-lg" />
                <div class="label">dash-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-square-dotted" />
                <div class="label">dash-square-dotted</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-square-fill" />
                <div class="label">dash-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash-square" />
                <div class="label">dash-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dash" />
                <div class="label">dash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diagram-2-fill" />
                <div class="label">diagram-2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diagram-2" />
                <div class="label">diagram-2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diagram-3-fill" />
                <div class="label">diagram-3-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diagram-3" />
                <div class="label">diagram-3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diamond-fill" />
                <div class="label">diamond-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diamond-half" />
                <div class="label">diamond-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-diamond" />
                <div class="label">diamond</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-1-fill" />
                <div class="label">dice-1-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-1" />
                <div class="label">dice-1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-2-fill" />
                <div class="label">dice-2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-2" />
                <div class="label">dice-2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-3-fill" />
                <div class="label">dice-3-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-3" />
                <div class="label">dice-3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-4-fill" />
                <div class="label">dice-4-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-4" />
                <div class="label">dice-4</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-5-fill" />
                <div class="label">dice-5-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-5" />
                <div class="label">dice-5</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-6-fill" />
                <div class="label">dice-6-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dice-6" />
                <div class="label">dice-6</div>
            </div>
            <div class="icon">
                <x-icon name="bi-disc-fill" />
                <div class="label">disc-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-disc" />
                <div class="label">disc</div>
            </div>
            <div class="icon">
                <x-icon name="bi-discord" />
                <div class="label">discord</div>
            </div>
            <div class="icon">
                <x-icon name="bi-display-fill" />
                <div class="label">display-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-display" />
                <div class="label">display</div>
            </div>
            <div class="icon">
                <x-icon name="bi-distribute-horizontal" />
                <div class="label">distribute-horizontal</div>
            </div>
            <div class="icon">
                <x-icon name="bi-distribute-vertical" />
                <div class="label">distribute-vertical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-door-closed-fill" />
                <div class="label">door-closed-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-door-closed" />
                <div class="label">door-closed</div>
            </div>
            <div class="icon">
                <x-icon name="bi-door-open-fill" />
                <div class="label">door-open-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-door-open" />
                <div class="label">door-open</div>
            </div>
            <div class="icon">
                <x-icon name="bi-dot" />
                <div class="label">dot</div>
            </div>
            <div class="icon">
                <x-icon name="bi-download" />
                <div class="label">download</div>
            </div>
            <div class="icon">
                <x-icon name="bi-droplet-fill" />
                <div class="label">droplet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-droplet-half" />
                <div class="label">droplet-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-droplet" />
                <div class="label">droplet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-earbuds" />
                <div class="label">earbuds</div>
            </div>
            <div class="icon">
                <x-icon name="bi-easel-fill" />
                <div class="label">easel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-easel" />
                <div class="label">easel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-egg-fill" />
                <div class="label">egg-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-egg-fried" />
                <div class="label">egg-fried</div>
            </div>
            <div class="icon">
                <x-icon name="bi-egg" />
                <div class="label">egg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eject-fill" />
                <div class="label">eject-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eject" />
                <div class="label">eject</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-angry-fill" />
                <div class="label">emoji-angry-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-angry" />
                <div class="label">emoji-angry</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-dizzy-fill" />
                <div class="label">emoji-dizzy-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-dizzy" />
                <div class="label">emoji-dizzy</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-expressionless-fill" />
                <div class="label">emoji-expressionless-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-expressionless" />
                <div class="label">emoji-expressionless</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-frown-fill" />
                <div class="label">emoji-frown-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-frown" />
                <div class="label">emoji-frown</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-heart-eyes-fill" />
                <div class="label">emoji-heart-eyes-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-heart-eyes" />
                <div class="label">emoji-heart-eyes</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-laughing-fill" />
                <div class="label">emoji-laughing-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-laughing" />
                <div class="label">emoji-laughing</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-neutral-fill" />
                <div class="label">emoji-neutral-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-neutral" />
                <div class="label">emoji-neutral</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-smile-fill" />
                <div class="label">emoji-smile-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-smile-upside-down-fill" />
                <div class="label">emoji-smile-upside-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-smile-upside-down" />
                <div class="label">emoji-smile-upside-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-smile" />
                <div class="label">emoji-smile</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-sunglasses-fill" />
                <div class="label">emoji-sunglasses-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-sunglasses" />
                <div class="label">emoji-sunglasses</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-wink-fill" />
                <div class="label">emoji-wink-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-emoji-wink" />
                <div class="label">emoji-wink</div>
            </div>
            <div class="icon">
                <x-icon name="bi-envelope-fill" />
                <div class="label">envelope-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-envelope-open-fill" />
                <div class="label">envelope-open-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-envelope-open" />
                <div class="label">envelope-open</div>
            </div>
            <div class="icon">
                <x-icon name="bi-envelope" />
                <div class="label">envelope</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eraser-fill" />
                <div class="label">eraser-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eraser" />
                <div class="label">eraser</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-circle-fill" />
                <div class="label">exclamation-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-circle" />
                <div class="label">exclamation-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-diamond-fill" />
                <div class="label">exclamation-diamond-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-diamond" />
                <div class="label">exclamation-diamond</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-lg" />
                <div class="label">exclamation-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-octagon-fill" />
                <div class="label">exclamation-octagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-octagon" />
                <div class="label">exclamation-octagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-square-fill" />
                <div class="label">exclamation-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-square" />
                <div class="label">exclamation-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-triangle-fill" />
                <div class="label">exclamation-triangle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation-triangle" />
                <div class="label">exclamation-triangle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclamation" />
                <div class="label">exclamation</div>
            </div>
            <div class="icon">
                <x-icon name="bi-exclude" />
                <div class="label">exclude</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eye-fill" />
                <div class="label">eye-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eye-slash-fill" />
                <div class="label">eye-slash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eye-slash" />
                <div class="label">eye-slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eye" />
                <div class="label">eye</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eyedropper" />
                <div class="label">eyedropper</div>
            </div>
            <div class="icon">
                <x-icon name="bi-eyeglasses" />
                <div class="label">eyeglasses</div>
            </div>
            <div class="icon">
                <x-icon name="bi-facebook" />
                <div class="label">facebook</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-arrow-down-fill" />
                <div class="label">file-arrow-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-arrow-down" />
                <div class="label">file-arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-arrow-up-fill" />
                <div class="label">file-arrow-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-arrow-up" />
                <div class="label">file-arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-bar-graph-fill" />
                <div class="label">file-bar-graph-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-bar-graph" />
                <div class="label">file-bar-graph</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-binary-fill" />
                <div class="label">file-binary-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-binary" />
                <div class="label">file-binary</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-break-fill" />
                <div class="label">file-break-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-break" />
                <div class="label">file-break</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-check-fill" />
                <div class="label">file-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-check" />
                <div class="label">file-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-code-fill" />
                <div class="label">file-code-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-code" />
                <div class="label">file-code</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-diff-fill" />
                <div class="label">file-diff-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-diff" />
                <div class="label">file-diff</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-arrow-down-fill" />
                <div class="label">file-earmark-arrow-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-arrow-down" />
                <div class="label">file-earmark-arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-arrow-up-fill" />
                <div class="label">file-earmark-arrow-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-arrow-up" />
                <div class="label">file-earmark-arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-bar-graph-fill" />
                <div class="label">file-earmark-bar-graph-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-bar-graph" />
                <div class="label">file-earmark-bar-graph</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-binary-fill" />
                <div class="label">file-earmark-binary-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-binary" />
                <div class="label">file-earmark-binary</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-break-fill" />
                <div class="label">file-earmark-break-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-break" />
                <div class="label">file-earmark-break</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-check-fill" />
                <div class="label">file-earmark-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-check" />
                <div class="label">file-earmark-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-code-fill" />
                <div class="label">file-earmark-code-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-code" />
                <div class="label">file-earmark-code</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-diff-fill" />
                <div class="label">file-earmark-diff-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-diff" />
                <div class="label">file-earmark-diff</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-easel-fill" />
                <div class="label">file-earmark-easel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-easel" />
                <div class="label">file-earmark-easel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-excel-fill" />
                <div class="label">file-earmark-excel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-excel" />
                <div class="label">file-earmark-excel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-fill" />
                <div class="label">file-earmark-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-font-fill" />
                <div class="label">file-earmark-font-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-font" />
                <div class="label">file-earmark-font</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-image-fill" />
                <div class="label">file-earmark-image-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-image" />
                <div class="label">file-earmark-image</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-lock-fill" />
                <div class="label">file-earmark-lock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-lock" />
                <div class="label">file-earmark-lock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-lock2-fill" />
                <div class="label">file-earmark-lock2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-lock2" />
                <div class="label">file-earmark-lock2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-medical-fill" />
                <div class="label">file-earmark-medical-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-medical" />
                <div class="label">file-earmark-medical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-minus-fill" />
                <div class="label">file-earmark-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-minus" />
                <div class="label">file-earmark-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-music-fill" />
                <div class="label">file-earmark-music-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-music" />
                <div class="label">file-earmark-music</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-pdf-fill" />
                <div class="label">file-earmark-pdf-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-pdf" />
                <div class="label">file-earmark-pdf</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-person-fill" />
                <div class="label">file-earmark-person-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-person" />
                <div class="label">file-earmark-person</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-play-fill" />
                <div class="label">file-earmark-play-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-play" />
                <div class="label">file-earmark-play</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-plus-fill" />
                <div class="label">file-earmark-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-plus" />
                <div class="label">file-earmark-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-post-fill" />
                <div class="label">file-earmark-post-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-post" />
                <div class="label">file-earmark-post</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-ppt-fill" />
                <div class="label">file-earmark-ppt-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-ppt" />
                <div class="label">file-earmark-ppt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-richtext-fill" />
                <div class="label">file-earmark-richtext-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-richtext" />
                <div class="label">file-earmark-richtext</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-ruled-fill" />
                <div class="label">file-earmark-ruled-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-ruled" />
                <div class="label">file-earmark-ruled</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-slides-fill" />
                <div class="label">file-earmark-slides-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-slides" />
                <div class="label">file-earmark-slides</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-spreadsheet-fill" />
                <div class="label">file-earmark-spreadsheet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-spreadsheet" />
                <div class="label">file-earmark-spreadsheet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-text-fill" />
                <div class="label">file-earmark-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-text" />
                <div class="label">file-earmark-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-word-fill" />
                <div class="label">file-earmark-word-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-word" />
                <div class="label">file-earmark-word</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-x-fill" />
                <div class="label">file-earmark-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-x" />
                <div class="label">file-earmark-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-zip-fill" />
                <div class="label">file-earmark-zip-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark-zip" />
                <div class="label">file-earmark-zip</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-earmark" />
                <div class="label">file-earmark</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-easel-fill" />
                <div class="label">file-easel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-easel" />
                <div class="label">file-easel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-excel-fill" />
                <div class="label">file-excel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-excel" />
                <div class="label">file-excel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-fill" />
                <div class="label">file-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-font-fill" />
                <div class="label">file-font-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-font" />
                <div class="label">file-font</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-image-fill" />
                <div class="label">file-image-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-image" />
                <div class="label">file-image</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-lock-fill" />
                <div class="label">file-lock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-lock" />
                <div class="label">file-lock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-lock2-fill" />
                <div class="label">file-lock2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-lock2" />
                <div class="label">file-lock2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-medical-fill" />
                <div class="label">file-medical-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-medical" />
                <div class="label">file-medical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-minus-fill" />
                <div class="label">file-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-minus" />
                <div class="label">file-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-music-fill" />
                <div class="label">file-music-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-music" />
                <div class="label">file-music</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-pdf-fill" />
                <div class="label">file-pdf-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-pdf" />
                <div class="label">file-pdf</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-person-fill" />
                <div class="label">file-person-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-person" />
                <div class="label">file-person</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-play-fill" />
                <div class="label">file-play-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-play" />
                <div class="label">file-play</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-plus-fill" />
                <div class="label">file-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-plus" />
                <div class="label">file-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-post-fill" />
                <div class="label">file-post-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-post" />
                <div class="label">file-post</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-ppt-fill" />
                <div class="label">file-ppt-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-ppt" />
                <div class="label">file-ppt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-richtext-fill" />
                <div class="label">file-richtext-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-richtext" />
                <div class="label">file-richtext</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-ruled-fill" />
                <div class="label">file-ruled-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-ruled" />
                <div class="label">file-ruled</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-slides-fill" />
                <div class="label">file-slides-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-slides" />
                <div class="label">file-slides</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-spreadsheet-fill" />
                <div class="label">file-spreadsheet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-spreadsheet" />
                <div class="label">file-spreadsheet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-text-fill" />
                <div class="label">file-text-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-text" />
                <div class="label">file-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-word-fill" />
                <div class="label">file-word-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-word" />
                <div class="label">file-word</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-x-fill" />
                <div class="label">file-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-x" />
                <div class="label">file-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-zip-fill" />
                <div class="label">file-zip-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file-zip" />
                <div class="label">file-zip</div>
            </div>
            <div class="icon">
                <x-icon name="bi-file" />
                <div class="label">file</div>
            </div>
            <div class="icon">
                <x-icon name="bi-files-alt" />
                <div class="label">files-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-files" />
                <div class="label">files</div>
            </div>
            <div class="icon">
                <x-icon name="bi-film" />
                <div class="label">film</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-circle-fill" />
                <div class="label">filter-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-circle" />
                <div class="label">filter-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-left" />
                <div class="label">filter-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-right" />
                <div class="label">filter-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-square-fill" />
                <div class="label">filter-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter-square" />
                <div class="label">filter-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-filter" />
                <div class="label">filter</div>
            </div>
            <div class="icon">
                <x-icon name="bi-flag-fill" />
                <div class="label">flag-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-flag" />
                <div class="label">flag</div>
            </div>
            <div class="icon">
                <x-icon name="bi-flower1" />
                <div class="label">flower1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-flower2" />
                <div class="label">flower2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-flower3" />
                <div class="label">flower3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-check" />
                <div class="label">folder-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-fill" />
                <div class="label">folder-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-minus" />
                <div class="label">folder-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-plus" />
                <div class="label">folder-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-symlink-fill" />
                <div class="label">folder-symlink-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-symlink" />
                <div class="label">folder-symlink</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder-x" />
                <div class="label">folder-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder" />
                <div class="label">folder</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder2-open" />
                <div class="label">folder2-open</div>
            </div>
            <div class="icon">
                <x-icon name="bi-folder2" />
                <div class="label">folder2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-fonts" />
                <div class="label">fonts</div>
            </div>
            <div class="icon">
                <x-icon name="bi-forward-fill" />
                <div class="label">forward-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-forward" />
                <div class="label">forward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-front" />
                <div class="label">front</div>
            </div>
            <div class="icon">
                <x-icon name="bi-fullscreen-exit" />
                <div class="label">fullscreen-exit</div>
            </div>
            <div class="icon">
                <x-icon name="bi-fullscreen" />
                <div class="label">fullscreen</div>
            </div>
            <div class="icon">
                <x-icon name="bi-funnel-fill" />
                <div class="label">funnel-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-funnel" />
                <div class="label">funnel</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gear-fill" />
                <div class="label">gear-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gear-wide-connected" />
                <div class="label">gear-wide-connected</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gear-wide" />
                <div class="label">gear-wide</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gear" />
                <div class="label">gear</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gem" />
                <div class="label">gem</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gender-ambiguous" />
                <div class="label">gender-ambiguous</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gender-female" />
                <div class="label">gender-female</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gender-male" />
                <div class="label">gender-male</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gender-trans" />
                <div class="label">gender-trans</div>
            </div>
            <div class="icon">
                <x-icon name="bi-geo-alt-fill" />
                <div class="label">geo-alt-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-geo-alt" />
                <div class="label">geo-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-geo-fill" />
                <div class="label">geo-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-geo" />
                <div class="label">geo</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gift-fill" />
                <div class="label">gift-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-gift" />
                <div class="label">gift</div>
            </div>
            <div class="icon">
                <x-icon name="bi-github" />
                <div class="label">github</div>
            </div>
            <div class="icon">
                <x-icon name="bi-globe" />
                <div class="label">globe</div>
            </div>
            <div class="icon">
                <x-icon name="bi-globe2" />
                <div class="label">globe2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-google" />
                <div class="label">google</div>
            </div>
            <div class="icon">
                <x-icon name="bi-graph-down" />
                <div class="label">graph-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-graph-up" />
                <div class="label">graph-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-1x2-fill" />
                <div class="label">grid-1x2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-1x2" />
                <div class="label">grid-1x2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x2-gap-fill" />
                <div class="label">grid-3x2-gap-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x2-gap" />
                <div class="label">grid-3x2-gap</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x2" />
                <div class="label">grid-3x2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x3-gap-fill" />
                <div class="label">grid-3x3-gap-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x3-gap" />
                <div class="label">grid-3x3-gap</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-3x3" />
                <div class="label">grid-3x3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid-fill" />
                <div class="label">grid-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grid" />
                <div class="label">grid</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grip-horizontal" />
                <div class="label">grip-horizontal</div>
            </div>
            <div class="icon">
                <x-icon name="bi-grip-vertical" />
                <div class="label">grip-vertical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hammer" />
                <div class="label">hammer</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-index-fill" />
                <div class="label">hand-index-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-index-thumb-fill" />
                <div class="label">hand-index-thumb-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-index-thumb" />
                <div class="label">hand-index-thumb</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-index" />
                <div class="label">hand-index</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-thumbs-down-fill" />
                <div class="label">hand-thumbs-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-thumbs-down" />
                <div class="label">hand-thumbs-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-thumbs-up-fill" />
                <div class="label">hand-thumbs-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hand-thumbs-up" />
                <div class="label">hand-thumbs-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-handbag-fill" />
                <div class="label">handbag-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-handbag" />
                <div class="label">handbag</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hash" />
                <div class="label">hash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-fill" />
                <div class="label">hdd-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-network-fill" />
                <div class="label">hdd-network-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-network" />
                <div class="label">hdd-network</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-rack-fill" />
                <div class="label">hdd-rack-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-rack" />
                <div class="label">hdd-rack</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-stack-fill" />
                <div class="label">hdd-stack-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd-stack" />
                <div class="label">hdd-stack</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hdd" />
                <div class="label">hdd</div>
            </div>
            <div class="icon">
                <x-icon name="bi-headphones" />
                <div class="label">headphones</div>
            </div>
            <div class="icon">
                <x-icon name="bi-headset-vr" />
                <div class="label">headset-vr</div>
            </div>
            <div class="icon">
                <x-icon name="bi-headset" />
                <div class="label">headset</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heart-fill" />
                <div class="label">heart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heart-half" />
                <div class="label">heart-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heart" />
                <div class="label">heart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heptagon-fill" />
                <div class="label">heptagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heptagon-half" />
                <div class="label">heptagon-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-heptagon" />
                <div class="label">heptagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hexagon-fill" />
                <div class="label">hexagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hexagon-half" />
                <div class="label">hexagon-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hexagon" />
                <div class="label">hexagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hourglass-bottom" />
                <div class="label">hourglass-bottom</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hourglass-split" />
                <div class="label">hourglass-split</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hourglass-top" />
                <div class="label">hourglass-top</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hourglass" />
                <div class="label">hourglass</div>
            </div>
            <div class="icon">
                <x-icon name="bi-house-door-fill" />
                <div class="label">house-door-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-house-door" />
                <div class="label">house-door</div>
            </div>
            <div class="icon">
                <x-icon name="bi-house-fill" />
                <div class="label">house-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-house" />
                <div class="label">house</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hr" />
                <div class="label">hr</div>
            </div>
            <div class="icon">
                <x-icon name="bi-hurricane" />
                <div class="label">hurricane</div>
            </div>
            <div class="icon">
                <x-icon name="bi-image-alt" />
                <div class="label">image-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-image-fill" />
                <div class="label">image-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-image" />
                <div class="label">image</div>
            </div>
            <div class="icon">
                <x-icon name="bi-images" />
                <div class="label">images</div>
            </div>
            <div class="icon">
                <x-icon name="bi-inbox-fill" />
                <div class="label">inbox-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-inbox" />
                <div class="label">inbox</div>
            </div>
            <div class="icon">
                <x-icon name="bi-inboxes-fill" />
                <div class="label">inboxes-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-inboxes" />
                <div class="label">inboxes</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info-circle-fill" />
                <div class="label">info-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info-circle" />
                <div class="label">info-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info-lg" />
                <div class="label">info-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info-square-fill" />
                <div class="label">info-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info-square" />
                <div class="label">info-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-info" />
                <div class="label">info</div>
            </div>
            <div class="icon">
                <x-icon name="bi-input-cursor-text" />
                <div class="label">input-cursor-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-input-cursor" />
                <div class="label">input-cursor</div>
            </div>
            <div class="icon">
                <x-icon name="bi-instagram" />
                <div class="label">instagram</div>
            </div>
            <div class="icon">
                <x-icon name="bi-intersect" />
                <div class="label">intersect</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-album" />
                <div class="label">journal-album</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-arrow-down" />
                <div class="label">journal-arrow-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-arrow-up" />
                <div class="label">journal-arrow-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-bookmark-fill" />
                <div class="label">journal-bookmark-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-bookmark" />
                <div class="label">journal-bookmark</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-check" />
                <div class="label">journal-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-code" />
                <div class="label">journal-code</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-medical" />
                <div class="label">journal-medical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-minus" />
                <div class="label">journal-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-plus" />
                <div class="label">journal-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-richtext" />
                <div class="label">journal-richtext</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-text" />
                <div class="label">journal-text</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal-x" />
                <div class="label">journal-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journal" />
                <div class="label">journal</div>
            </div>
            <div class="icon">
                <x-icon name="bi-journals" />
                <div class="label">journals</div>
            </div>
            <div class="icon">
                <x-icon name="bi-joystick" />
                <div class="label">joystick</div>
            </div>
            <div class="icon">
                <x-icon name="bi-justify-left" />
                <div class="label">justify-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-justify-right" />
                <div class="label">justify-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-justify" />
                <div class="label">justify</div>
            </div>
            <div class="icon">
                <x-icon name="bi-kanban-fill" />
                <div class="label">kanban-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-kanban" />
                <div class="label">kanban</div>
            </div>
            <div class="icon">
                <x-icon name="bi-key-fill" />
                <div class="label">key-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-key" />
                <div class="label">key</div>
            </div>
            <div class="icon">
                <x-icon name="bi-keyboard-fill" />
                <div class="label">keyboard-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-keyboard" />
                <div class="label">keyboard</div>
            </div>
            <div class="icon">
                <x-icon name="bi-ladder" />
                <div class="label">ladder</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lamp-fill" />
                <div class="label">lamp-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lamp" />
                <div class="label">lamp</div>
            </div>
            <div class="icon">
                <x-icon name="bi-laptop-fill" />
                <div class="label">laptop-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-laptop" />
                <div class="label">laptop</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layer-backward" />
                <div class="label">layer-backward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layer-forward" />
                <div class="label">layer-forward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layers-fill" />
                <div class="label">layers-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layers-half" />
                <div class="label">layers-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layers" />
                <div class="label">layers</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-sidebar-inset-reverse" />
                <div class="label">layout-sidebar-inset-reverse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-sidebar-inset" />
                <div class="label">layout-sidebar-inset</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-sidebar-reverse" />
                <div class="label">layout-sidebar-reverse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-sidebar" />
                <div class="label">layout-sidebar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-split" />
                <div class="label">layout-split</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-text-sidebar-reverse" />
                <div class="label">layout-text-sidebar-reverse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-text-sidebar" />
                <div class="label">layout-text-sidebar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-text-window-reverse" />
                <div class="label">layout-text-window-reverse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-text-window" />
                <div class="label">layout-text-window</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-three-columns" />
                <div class="label">layout-three-columns</div>
            </div>
            <div class="icon">
                <x-icon name="bi-layout-wtf" />
                <div class="label">layout-wtf</div>
            </div>
            <div class="icon">
                <x-icon name="bi-life-preserver" />
                <div class="label">life-preserver</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightbulb-fill" />
                <div class="label">lightbulb-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightbulb-off-fill" />
                <div class="label">lightbulb-off-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightbulb-off" />
                <div class="label">lightbulb-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightbulb" />
                <div class="label">lightbulb</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightning-charge-fill" />
                <div class="label">lightning-charge-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightning-charge" />
                <div class="label">lightning-charge</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightning-fill" />
                <div class="label">lightning-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lightning" />
                <div class="label">lightning</div>
            </div>
            <div class="icon">
                <x-icon name="bi-link-45deg" />
                <div class="label">link-45deg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-link" />
                <div class="label">link</div>
            </div>
            <div class="icon">
                <x-icon name="bi-linkedin" />
                <div class="label">linkedin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-check" />
                <div class="label">list-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-nested" />
                <div class="label">list-nested</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-ol" />
                <div class="label">list-ol</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-stars" />
                <div class="label">list-stars</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-task" />
                <div class="label">list-task</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list-ul" />
                <div class="label">list-ul</div>
            </div>
            <div class="icon">
                <x-icon name="bi-list" />
                <div class="label">list</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lock-fill" />
                <div class="label">lock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-lock" />
                <div class="label">lock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mailbox" />
                <div class="label">mailbox</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mailbox2" />
                <div class="label">mailbox2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-map-fill" />
                <div class="label">map-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-map" />
                <div class="label">map</div>
            </div>
            <div class="icon">
                <x-icon name="bi-markdown-fill" />
                <div class="label">markdown-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-markdown" />
                <div class="label">markdown</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mask" />
                <div class="label">mask</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mastodon" />
                <div class="label">mastodon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-megaphone-fill" />
                <div class="label">megaphone-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-megaphone" />
                <div class="label">megaphone</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-app-fill" />
                <div class="label">menu-app-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-app" />
                <div class="label">menu-app</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-button-fill" />
                <div class="label">menu-button-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-button-wide-fill" />
                <div class="label">menu-button-wide-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-button-wide" />
                <div class="label">menu-button-wide</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-button" />
                <div class="label">menu-button</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-down" />
                <div class="label">menu-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-menu-up" />
                <div class="label">menu-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-messenger" />
                <div class="label">messenger</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mic-fill" />
                <div class="label">mic-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mic-mute-fill" />
                <div class="label">mic-mute-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mic-mute" />
                <div class="label">mic-mute</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mic" />
                <div class="label">mic</div>
            </div>
            <div class="icon">
                <x-icon name="bi-minecart-loaded" />
                <div class="label">minecart-loaded</div>
            </div>
            <div class="icon">
                <x-icon name="bi-minecart" />
                <div class="label">minecart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-moisture" />
                <div class="label">moisture</div>
            </div>
            <div class="icon">
                <x-icon name="bi-moon-fill" />
                <div class="label">moon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-moon-stars-fill" />
                <div class="label">moon-stars-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-moon-stars" />
                <div class="label">moon-stars</div>
            </div>
            <div class="icon">
                <x-icon name="bi-moon" />
                <div class="label">moon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse-fill" />
                <div class="label">mouse-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse" />
                <div class="label">mouse</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse2-fill" />
                <div class="label">mouse2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse2" />
                <div class="label">mouse2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse3-fill" />
                <div class="label">mouse3-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-mouse3" />
                <div class="label">mouse3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-music-note-beamed" />
                <div class="label">music-note-beamed</div>
            </div>
            <div class="icon">
                <x-icon name="bi-music-note-list" />
                <div class="label">music-note-list</div>
            </div>
            <div class="icon">
                <x-icon name="bi-music-note" />
                <div class="label">music-note</div>
            </div>
            <div class="icon">
                <x-icon name="bi-music-player-fill" />
                <div class="label">music-player-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-music-player" />
                <div class="label">music-player</div>
            </div>
            <div class="icon">
                <x-icon name="bi-newspaper" />
                <div class="label">newspaper</div>
            </div>
            <div class="icon">
                <x-icon name="bi-node-minus-fill" />
                <div class="label">node-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-node-minus" />
                <div class="label">node-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-node-plus-fill" />
                <div class="label">node-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-node-plus" />
                <div class="label">node-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-nut-fill" />
                <div class="label">nut-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-nut" />
                <div class="label">nut</div>
            </div>
            <div class="icon">
                <x-icon name="bi-octagon-fill" />
                <div class="label">octagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-octagon-half" />
                <div class="label">octagon-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-octagon" />
                <div class="label">octagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-option" />
                <div class="label">option</div>
            </div>
            <div class="icon">
                <x-icon name="bi-outlet" />
                <div class="label">outlet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-paint-bucket" />
                <div class="label">paint-bucket</div>
            </div>
            <div class="icon">
                <x-icon name="bi-palette-fill" />
                <div class="label">palette-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-palette" />
                <div class="label">palette</div>
            </div>
            <div class="icon">
                <x-icon name="bi-palette2" />
                <div class="label">palette2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-paperclip" />
                <div class="label">paperclip</div>
            </div>
            <div class="icon">
                <x-icon name="bi-paragraph" />
                <div class="label">paragraph</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-check-fill" />
                <div class="label">patch-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-check" />
                <div class="label">patch-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-exclamation-fill" />
                <div class="label">patch-exclamation-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-exclamation" />
                <div class="label">patch-exclamation</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-minus-fill" />
                <div class="label">patch-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-minus" />
                <div class="label">patch-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-plus-fill" />
                <div class="label">patch-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-plus" />
                <div class="label">patch-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-question-fill" />
                <div class="label">patch-question-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-patch-question" />
                <div class="label">patch-question</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause-btn-fill" />
                <div class="label">pause-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause-btn" />
                <div class="label">pause-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause-circle-fill" />
                <div class="label">pause-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause-circle" />
                <div class="label">pause-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause-fill" />
                <div class="label">pause-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pause" />
                <div class="label">pause</div>
            </div>
            <div class="icon">
                <x-icon name="bi-peace-fill" />
                <div class="label">peace-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-peace" />
                <div class="label">peace</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pen-fill" />
                <div class="label">pen-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pen" />
                <div class="label">pen</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pencil-fill" />
                <div class="label">pencil-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pencil-square" />
                <div class="label">pencil-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pencil" />
                <div class="label">pencil</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pentagon-fill" />
                <div class="label">pentagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pentagon-half" />
                <div class="label">pentagon-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pentagon" />
                <div class="label">pentagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-people-fill" />
                <div class="label">people-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-people" />
                <div class="label">people</div>
            </div>
            <div class="icon">
                <x-icon name="bi-percent" />
                <div class="label">percent</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-badge-fill" />
                <div class="label">person-badge-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-badge" />
                <div class="label">person-badge</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-bounding-box" />
                <div class="label">person-bounding-box</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-check-fill" />
                <div class="label">person-check-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-check" />
                <div class="label">person-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-circle" />
                <div class="label">person-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-dash-fill" />
                <div class="label">person-dash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-dash" />
                <div class="label">person-dash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-fill" />
                <div class="label">person-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-lines-fill" />
                <div class="label">person-lines-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-plus-fill" />
                <div class="label">person-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-plus" />
                <div class="label">person-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-square" />
                <div class="label">person-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-x-fill" />
                <div class="label">person-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person-x" />
                <div class="label">person-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-person" />
                <div class="label">person</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone-fill" />
                <div class="label">phone-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone-landscape-fill" />
                <div class="label">phone-landscape-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone-landscape" />
                <div class="label">phone-landscape</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone-vibrate-fill" />
                <div class="label">phone-vibrate-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone-vibrate" />
                <div class="label">phone-vibrate</div>
            </div>
            <div class="icon">
                <x-icon name="bi-phone" />
                <div class="label">phone</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pie-chart-fill" />
                <div class="label">pie-chart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pie-chart" />
                <div class="label">pie-chart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-piggy-bank-fill" />
                <div class="label">piggy-bank-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-piggy-bank" />
                <div class="label">piggy-bank</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin-angle-fill" />
                <div class="label">pin-angle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin-angle" />
                <div class="label">pin-angle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin-fill" />
                <div class="label">pin-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin-map-fill" />
                <div class="label">pin-map-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin-map" />
                <div class="label">pin-map</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pin" />
                <div class="label">pin</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pip-fill" />
                <div class="label">pip-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-pip" />
                <div class="label">pip</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play-btn-fill" />
                <div class="label">play-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play-btn" />
                <div class="label">play-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play-circle-fill" />
                <div class="label">play-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play-circle" />
                <div class="label">play-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play-fill" />
                <div class="label">play-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-play" />
                <div class="label">play</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plug-fill" />
                <div class="label">plug-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plug" />
                <div class="label">plug</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-circle-dotted" />
                <div class="label">plus-circle-dotted</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-circle-fill" />
                <div class="label">plus-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-circle" />
                <div class="label">plus-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-lg" />
                <div class="label">plus-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-square-dotted" />
                <div class="label">plus-square-dotted</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-square-fill" />
                <div class="label">plus-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus-square" />
                <div class="label">plus-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-plus" />
                <div class="label">plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-power" />
                <div class="label">power</div>
            </div>
            <div class="icon">
                <x-icon name="bi-printer-fill" />
                <div class="label">printer-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-printer" />
                <div class="label">printer</div>
            </div>
            <div class="icon">
                <x-icon name="bi-puzzle-fill" />
                <div class="label">puzzle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-puzzle" />
                <div class="label">puzzle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-circle-fill" />
                <div class="label">question-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-circle" />
                <div class="label">question-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-diamond-fill" />
                <div class="label">question-diamond-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-diamond" />
                <div class="label">question-diamond</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-lg" />
                <div class="label">question-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-octagon-fill" />
                <div class="label">question-octagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-octagon" />
                <div class="label">question-octagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-square-fill" />
                <div class="label">question-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question-square" />
                <div class="label">question-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-question" />
                <div class="label">question</div>
            </div>
            <div class="icon">
                <x-icon name="bi-rainbow" />
                <div class="label">rainbow</div>
            </div>
            <div class="icon">
                <x-icon name="bi-receipt-cutoff" />
                <div class="label">receipt-cutoff</div>
            </div>
            <div class="icon">
                <x-icon name="bi-receipt" />
                <div class="label">receipt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reception-0" />
                <div class="label">reception-0</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reception-1" />
                <div class="label">reception-1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reception-2" />
                <div class="label">reception-2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reception-3" />
                <div class="label">reception-3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reception-4" />
                <div class="label">reception-4</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record-btn-fill" />
                <div class="label">record-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record-btn" />
                <div class="label">record-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record-circle-fill" />
                <div class="label">record-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record-circle" />
                <div class="label">record-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record-fill" />
                <div class="label">record-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record" />
                <div class="label">record</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record2-fill" />
                <div class="label">record2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-record2" />
                <div class="label">record2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-recycle" />
                <div class="label">recycle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reddit" />
                <div class="label">reddit</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reply-all-fill" />
                <div class="label">reply-all-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reply-all" />
                <div class="label">reply-all</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reply-fill" />
                <div class="label">reply-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-reply" />
                <div class="label">reply</div>
            </div>
            <div class="icon">
                <x-icon name="bi-rss-fill" />
                <div class="label">rss-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-rss" />
                <div class="label">rss</div>
            </div>
            <div class="icon">
                <x-icon name="bi-rulers" />
                <div class="label">rulers</div>
            </div>
            <div class="icon">
                <x-icon name="bi-safe-fill" />
                <div class="label">safe-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-safe" />
                <div class="label">safe</div>
            </div>
            <div class="icon">
                <x-icon name="bi-safe2-fill" />
                <div class="label">safe2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-safe2" />
                <div class="label">safe2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-save-fill" />
                <div class="label">save-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-save" />
                <div class="label">save</div>
            </div>
            <div class="icon">
                <x-icon name="bi-save2-fill" />
                <div class="label">save2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-save2" />
                <div class="label">save2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-scissors" />
                <div class="label">scissors</div>
            </div>
            <div class="icon">
                <x-icon name="bi-screwdriver" />
                <div class="label">screwdriver</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sd-card-fill" />
                <div class="label">sd-card-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sd-card" />
                <div class="label">sd-card</div>
            </div>
            <div class="icon">
                <x-icon name="bi-search" />
                <div class="label">search</div>
            </div>
            <div class="icon">
                <x-icon name="bi-segmented-nav" />
                <div class="label">segmented-nav</div>
            </div>
            <div class="icon">
                <x-icon name="bi-server" />
                <div class="label">server</div>
            </div>
            <div class="icon">
                <x-icon name="bi-share-fill" />
                <div class="label">share-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-share" />
                <div class="label">share</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-check" />
                <div class="label">shield-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-exclamation" />
                <div class="label">shield-exclamation</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill-check" />
                <div class="label">shield-fill-check</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill-exclamation" />
                <div class="label">shield-fill-exclamation</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill-minus" />
                <div class="label">shield-fill-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill-plus" />
                <div class="label">shield-fill-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill-x" />
                <div class="label">shield-fill-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-fill" />
                <div class="label">shield-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-lock-fill" />
                <div class="label">shield-lock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-lock" />
                <div class="label">shield-lock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-minus" />
                <div class="label">shield-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-plus" />
                <div class="label">shield-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-shaded" />
                <div class="label">shield-shaded</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-slash-fill" />
                <div class="label">shield-slash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-slash" />
                <div class="label">shield-slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield-x" />
                <div class="label">shield-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shield" />
                <div class="label">shield</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shift-fill" />
                <div class="label">shift-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shift" />
                <div class="label">shift</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shop-window" />
                <div class="label">shop-window</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shop" />
                <div class="label">shop</div>
            </div>
            <div class="icon">
                <x-icon name="bi-shuffle" />
                <div class="label">shuffle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost-2-fill" />
                <div class="label">signpost-2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost-2" />
                <div class="label">signpost-2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost-fill" />
                <div class="label">signpost-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost-split-fill" />
                <div class="label">signpost-split-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost-split" />
                <div class="label">signpost-split</div>
            </div>
            <div class="icon">
                <x-icon name="bi-signpost" />
                <div class="label">signpost</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sim-fill" />
                <div class="label">sim-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sim" />
                <div class="label">sim</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward-btn-fill" />
                <div class="label">skip-backward-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward-btn" />
                <div class="label">skip-backward-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward-circle-fill" />
                <div class="label">skip-backward-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward-circle" />
                <div class="label">skip-backward-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward-fill" />
                <div class="label">skip-backward-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-backward" />
                <div class="label">skip-backward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end-btn-fill" />
                <div class="label">skip-end-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end-btn" />
                <div class="label">skip-end-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end-circle-fill" />
                <div class="label">skip-end-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end-circle" />
                <div class="label">skip-end-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end-fill" />
                <div class="label">skip-end-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-end" />
                <div class="label">skip-end</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward-btn-fill" />
                <div class="label">skip-forward-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward-btn" />
                <div class="label">skip-forward-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward-circle-fill" />
                <div class="label">skip-forward-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward-circle" />
                <div class="label">skip-forward-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward-fill" />
                <div class="label">skip-forward-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-forward" />
                <div class="label">skip-forward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start-btn-fill" />
                <div class="label">skip-start-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start-btn" />
                <div class="label">skip-start-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start-circle-fill" />
                <div class="label">skip-start-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start-circle" />
                <div class="label">skip-start-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start-fill" />
                <div class="label">skip-start-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skip-start" />
                <div class="label">skip-start</div>
            </div>
            <div class="icon">
                <x-icon name="bi-skype" />
                <div class="label">skype</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slack" />
                <div class="label">slack</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash-circle-fill" />
                <div class="label">slash-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash-circle" />
                <div class="label">slash-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash-lg" />
                <div class="label">slash-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash-square-fill" />
                <div class="label">slash-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash-square" />
                <div class="label">slash-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-slash" />
                <div class="label">slash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sliders" />
                <div class="label">sliders</div>
            </div>
            <div class="icon">
                <x-icon name="bi-smartwatch" />
                <div class="label">smartwatch</div>
            </div>
            <div class="icon">
                <x-icon name="bi-snow" />
                <div class="label">snow</div>
            </div>
            <div class="icon">
                <x-icon name="bi-snow2" />
                <div class="label">snow2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-snow3" />
                <div class="label">snow3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-alpha-down-alt" />
                <div class="label">sort-alpha-down-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-alpha-down" />
                <div class="label">sort-alpha-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-alpha-up-alt" />
                <div class="label">sort-alpha-up-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-alpha-up" />
                <div class="label">sort-alpha-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-down-alt" />
                <div class="label">sort-down-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-down" />
                <div class="label">sort-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-numeric-down-alt" />
                <div class="label">sort-numeric-down-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-numeric-down" />
                <div class="label">sort-numeric-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-numeric-up-alt" />
                <div class="label">sort-numeric-up-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-numeric-up" />
                <div class="label">sort-numeric-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-up-alt" />
                <div class="label">sort-up-alt</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sort-up" />
                <div class="label">sort-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-soundwave" />
                <div class="label">soundwave</div>
            </div>
            <div class="icon">
                <x-icon name="bi-speaker-fill" />
                <div class="label">speaker-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-speaker" />
                <div class="label">speaker</div>
            </div>
            <div class="icon">
                <x-icon name="bi-speedometer" />
                <div class="label">speedometer</div>
            </div>
            <div class="icon">
                <x-icon name="bi-speedometer2" />
                <div class="label">speedometer2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-spellcheck" />
                <div class="label">spellcheck</div>
            </div>
            <div class="icon">
                <x-icon name="bi-square-fill" />
                <div class="label">square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-square-half" />
                <div class="label">square-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-square" />
                <div class="label">square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stack" />
                <div class="label">stack</div>
            </div>
            <div class="icon">
                <x-icon name="bi-star-fill" />
                <div class="label">star-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-star-half" />
                <div class="label">star-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-star" />
                <div class="label">star</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stars" />
                <div class="label">stars</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stickies-fill" />
                <div class="label">stickies-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stickies" />
                <div class="label">stickies</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sticky-fill" />
                <div class="label">sticky-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sticky" />
                <div class="label">sticky</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop-btn-fill" />
                <div class="label">stop-btn-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop-btn" />
                <div class="label">stop-btn</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop-circle-fill" />
                <div class="label">stop-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop-circle" />
                <div class="label">stop-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop-fill" />
                <div class="label">stop-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stop" />
                <div class="label">stop</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stoplights-fill" />
                <div class="label">stoplights-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stoplights" />
                <div class="label">stoplights</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stopwatch-fill" />
                <div class="label">stopwatch-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-stopwatch" />
                <div class="label">stopwatch</div>
            </div>
            <div class="icon">
                <x-icon name="bi-subtract" />
                <div class="label">subtract</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-club-fill" />
                <div class="label">suit-club-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-club" />
                <div class="label">suit-club</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-diamond-fill" />
                <div class="label">suit-diamond-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-diamond" />
                <div class="label">suit-diamond</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-heart-fill" />
                <div class="label">suit-heart-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-heart" />
                <div class="label">suit-heart</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-spade-fill" />
                <div class="label">suit-spade-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-suit-spade" />
                <div class="label">suit-spade</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sun-fill" />
                <div class="label">sun-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sun" />
                <div class="label">sun</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sunglasses" />
                <div class="label">sunglasses</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sunrise-fill" />
                <div class="label">sunrise-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sunrise" />
                <div class="label">sunrise</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sunset-fill" />
                <div class="label">sunset-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-sunset" />
                <div class="label">sunset</div>
            </div>
            <div class="icon">
                <x-icon name="bi-symmetry-horizontal" />
                <div class="label">symmetry-horizontal</div>
            </div>
            <div class="icon">
                <x-icon name="bi-symmetry-vertical" />
                <div class="label">symmetry-vertical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-table" />
                <div class="label">table</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tablet-fill" />
                <div class="label">tablet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tablet-landscape-fill" />
                <div class="label">tablet-landscape-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tablet-landscape" />
                <div class="label">tablet-landscape</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tablet" />
                <div class="label">tablet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tag-fill" />
                <div class="label">tag-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tag" />
                <div class="label">tag</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tags-fill" />
                <div class="label">tags-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tags" />
                <div class="label">tags</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telegram" />
                <div class="label">telegram</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-fill" />
                <div class="label">telephone-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-forward-fill" />
                <div class="label">telephone-forward-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-forward" />
                <div class="label">telephone-forward</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-inbound-fill" />
                <div class="label">telephone-inbound-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-inbound" />
                <div class="label">telephone-inbound</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-minus-fill" />
                <div class="label">telephone-minus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-minus" />
                <div class="label">telephone-minus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-outbound-fill" />
                <div class="label">telephone-outbound-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-outbound" />
                <div class="label">telephone-outbound</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-plus-fill" />
                <div class="label">telephone-plus-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-plus" />
                <div class="label">telephone-plus</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-x-fill" />
                <div class="label">telephone-x-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone-x" />
                <div class="label">telephone-x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-telephone" />
                <div class="label">telephone</div>
            </div>
            <div class="icon">
                <x-icon name="bi-terminal-fill" />
                <div class="label">terminal-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-terminal" />
                <div class="label">terminal</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-center" />
                <div class="label">text-center</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-indent-left" />
                <div class="label">text-indent-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-indent-right" />
                <div class="label">text-indent-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-left" />
                <div class="label">text-left</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-paragraph" />
                <div class="label">text-paragraph</div>
            </div>
            <div class="icon">
                <x-icon name="bi-text-right" />
                <div class="label">text-right</div>
            </div>
            <div class="icon">
                <x-icon name="bi-textarea-resize" />
                <div class="label">textarea-resize</div>
            </div>
            <div class="icon">
                <x-icon name="bi-textarea-t" />
                <div class="label">textarea-t</div>
            </div>
            <div class="icon">
                <x-icon name="bi-textarea" />
                <div class="label">textarea</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer-half" />
                <div class="label">thermometer-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer-high" />
                <div class="label">thermometer-high</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer-low" />
                <div class="label">thermometer-low</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer-snow" />
                <div class="label">thermometer-snow</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer-sun" />
                <div class="label">thermometer-sun</div>
            </div>
            <div class="icon">
                <x-icon name="bi-thermometer" />
                <div class="label">thermometer</div>
            </div>
            <div class="icon">
                <x-icon name="bi-three-dots-vertical" />
                <div class="label">three-dots-vertical</div>
            </div>
            <div class="icon">
                <x-icon name="bi-three-dots" />
                <div class="label">three-dots</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggle-off" />
                <div class="label">toggle-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggle-on" />
                <div class="label">toggle-on</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggle2-off" />
                <div class="label">toggle2-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggle2-on" />
                <div class="label">toggle2-on</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggles" />
                <div class="label">toggles</div>
            </div>
            <div class="icon">
                <x-icon name="bi-toggles2" />
                <div class="label">toggles2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tools" />
                <div class="label">tools</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tornado" />
                <div class="label">tornado</div>
            </div>
            <div class="icon">
                <x-icon name="bi-translate" />
                <div class="label">translate</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trash-fill" />
                <div class="label">trash-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trash" />
                <div class="label">trash</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trash2-fill" />
                <div class="label">trash2-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trash2" />
                <div class="label">trash2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tree-fill" />
                <div class="label">tree-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tree" />
                <div class="label">tree</div>
            </div>
            <div class="icon">
                <x-icon name="bi-triangle-fill" />
                <div class="label">triangle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-triangle-half" />
                <div class="label">triangle-half</div>
            </div>
            <div class="icon">
                <x-icon name="bi-triangle" />
                <div class="label">triangle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trophy-fill" />
                <div class="label">trophy-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-trophy" />
                <div class="label">trophy</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tropical-storm" />
                <div class="label">tropical-storm</div>
            </div>
            <div class="icon">
                <x-icon name="bi-truck-flatbed" />
                <div class="label">truck-flatbed</div>
            </div>
            <div class="icon">
                <x-icon name="bi-truck" />
                <div class="label">truck</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tsunami" />
                <div class="label">tsunami</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tv-fill" />
                <div class="label">tv-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-tv" />
                <div class="label">tv</div>
            </div>
            <div class="icon">
                <x-icon name="bi-twitch" />
                <div class="label">twitch</div>
            </div>
            <div class="icon">
                <x-icon name="bi-twitter" />
                <div class="label">twitter</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-bold" />
                <div class="label">type-bold</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-h1" />
                <div class="label">type-h1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-h2" />
                <div class="label">type-h2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-h3" />
                <div class="label">type-h3</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-italic" />
                <div class="label">type-italic</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-strikethrough" />
                <div class="label">type-strikethrough</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type-underline" />
                <div class="label">type-underline</div>
            </div>
            <div class="icon">
                <x-icon name="bi-type" />
                <div class="label">type</div>
            </div>
            <div class="icon">
                <x-icon name="bi-ui-checks-grid" />
                <div class="label">ui-checks-grid</div>
            </div>
            <div class="icon">
                <x-icon name="bi-ui-checks" />
                <div class="label">ui-checks</div>
            </div>
            <div class="icon">
                <x-icon name="bi-ui-radios-grid" />
                <div class="label">ui-radios-grid</div>
            </div>
            <div class="icon">
                <x-icon name="bi-ui-radios" />
                <div class="label">ui-radios</div>
            </div>
            <div class="icon">
                <x-icon name="bi-umbrella-fill" />
                <div class="label">umbrella-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-umbrella" />
                <div class="label">umbrella</div>
            </div>
            <div class="icon">
                <x-icon name="bi-union" />
                <div class="label">union</div>
            </div>
            <div class="icon">
                <x-icon name="bi-unlock-fill" />
                <div class="label">unlock-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-unlock" />
                <div class="label">unlock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-upc-scan" />
                <div class="label">upc-scan</div>
            </div>
            <div class="icon">
                <x-icon name="bi-upc" />
                <div class="label">upc</div>
            </div>
            <div class="icon">
                <x-icon name="bi-upload" />
                <div class="label">upload</div>
            </div>
            <div class="icon">
                <x-icon name="bi-vector-pen" />
                <div class="label">vector-pen</div>
            </div>
            <div class="icon">
                <x-icon name="bi-view-list" />
                <div class="label">view-list</div>
            </div>
            <div class="icon">
                <x-icon name="bi-view-stacked" />
                <div class="label">view-stacked</div>
            </div>
            <div class="icon">
                <x-icon name="bi-vinyl-fill" />
                <div class="label">vinyl-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-vinyl" />
                <div class="label">vinyl</div>
            </div>
            <div class="icon">
                <x-icon name="bi-voicemail" />
                <div class="label">voicemail</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-down-fill" />
                <div class="label">volume-down-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-down" />
                <div class="label">volume-down</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-mute-fill" />
                <div class="label">volume-mute-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-mute" />
                <div class="label">volume-mute</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-off-fill" />
                <div class="label">volume-off-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-off" />
                <div class="label">volume-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-up-fill" />
                <div class="label">volume-up-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-volume-up" />
                <div class="label">volume-up</div>
            </div>
            <div class="icon">
                <x-icon name="bi-vr" />
                <div class="label">vr</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wallet-fill" />
                <div class="label">wallet-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wallet" />
                <div class="label">wallet</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wallet2" />
                <div class="label">wallet2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-watch" />
                <div class="label">watch</div>
            </div>
            <div class="icon">
                <x-icon name="bi-water" />
                <div class="label">water</div>
            </div>
            <div class="icon">
                <x-icon name="bi-whatsapp" />
                <div class="label">whatsapp</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wifi-1" />
                <div class="label">wifi-1</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wifi-2" />
                <div class="label">wifi-2</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wifi-off" />
                <div class="label">wifi-off</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wifi" />
                <div class="label">wifi</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wind" />
                <div class="label">wind</div>
            </div>
            <div class="icon">
                <x-icon name="bi-window-dock" />
                <div class="label">window-dock</div>
            </div>
            <div class="icon">
                <x-icon name="bi-window-sidebar" />
                <div class="label">window-sidebar</div>
            </div>
            <div class="icon">
                <x-icon name="bi-window" />
                <div class="label">window</div>
            </div>
            <div class="icon">
                <x-icon name="bi-wrench" />
                <div class="label">wrench</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-circle-fill" />
                <div class="label">x-circle-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-circle" />
                <div class="label">x-circle</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-diamond-fill" />
                <div class="label">x-diamond-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-diamond" />
                <div class="label">x-diamond</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-lg" />
                <div class="label">x-lg</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-octagon-fill" />
                <div class="label">x-octagon-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-octagon" />
                <div class="label">x-octagon</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-square-fill" />
                <div class="label">x-square-fill</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x-square" />
                <div class="label">x-square</div>
            </div>
            <div class="icon">
                <x-icon name="bi-x" />
                <div class="label">x</div>
            </div>
            <div class="icon">
                <x-icon name="bi-youtube" />
                <div class="label">youtube</div>
            </div>
            <div class="icon">
                <x-icon name="bi-zoom-in" />
                <div class="label">zoom-in</div>
            </div>
            <div class="icon">
                <x-icon name="bi-zoom-out" />
                <div class="label">zoom-out</div>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
