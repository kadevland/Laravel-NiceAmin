@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Icons',
        'Remix',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Remix Icons" :breadcrumbs="$breadcrumbs">
        <p>
            Use the following pattern to add the Remix icons to anywhere in your project. <code>&lt;i class="<strong>ri-add-line</strong>"&gt;&lt;/i&gt;</code> Replace the bold part with the below icon names.
            Check the <a href="https://remixicon.com/" target="_blank">Official website</a> for more info.
        </p>
        <div class="iconslist">

            <div class="icon">
               <x-icon name="ri-24-hours-fill"/>
              <div class="label">ri-24-hours-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-24-hours-line"/>
              <div class="label">ri-24-hours-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-4k-fill"/>
              <div class="label">ri-4k-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-4k-line"/>
              <div class="label">ri-4k-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-a-b"/>
              <div class="label">ri-a-b</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-box-fill"/>
              <div class="label">ri-account-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-box-line"/>
              <div class="label">ri-account-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-circle-fill"/>
              <div class="label">ri-account-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-circle-line"/>
              <div class="label">ri-account-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-pin-box-fill"/>
              <div class="label">ri-account-pin-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-pin-box-line"/>
              <div class="label">ri-account-pin-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-pin-circle-fill"/>
              <div class="label">ri-account-pin-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-account-pin-circle-line"/>
              <div class="label">ri-account-pin-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-box-fill"/>
              <div class="label">ri-add-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-box-line"/>
              <div class="label">ri-add-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-circle-fill"/>
              <div class="label">ri-add-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-circle-line"/>
              <div class="label">ri-add-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-fill"/>
              <div class="label">ri-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-add-line"/>
              <div class="label">ri-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-admin-fill"/>
              <div class="label">ri-admin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-admin-line"/>
              <div class="label">ri-admin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-advertisement-fill"/>
              <div class="label">ri-advertisement-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-advertisement-line"/>
              <div class="label">ri-advertisement-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-airplay-fill"/>
              <div class="label">ri-airplay-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-airplay-line"/>
              <div class="label">ri-airplay-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alarm-fill"/>
              <div class="label">ri-alarm-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alarm-line"/>
              <div class="label">ri-alarm-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alarm-warning-fill"/>
              <div class="label">ri-alarm-warning-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alarm-warning-line"/>
              <div class="label">ri-alarm-warning-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-album-fill"/>
              <div class="label">ri-album-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-album-line"/>
              <div class="label">ri-album-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alert-fill"/>
              <div class="label">ri-alert-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alert-line"/>
              <div class="label">ri-alert-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-aliens-fill"/>
              <div class="label">ri-aliens-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-aliens-line"/>
              <div class="label">ri-aliens-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-bottom"/>
              <div class="label">ri-align-bottom</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-center"/>
              <div class="label">ri-align-center</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-justify"/>
              <div class="label">ri-align-justify</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-left"/>
              <div class="label">ri-align-left</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-right"/>
              <div class="label">ri-align-right</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-top"/>
              <div class="label">ri-align-top</div>
            </div>
            <div class="icon">
               <x-icon name="ri-align-vertically"/>
              <div class="label">ri-align-vertically</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alipay-fill"/>
              <div class="label">ri-alipay-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-alipay-line"/>
              <div class="label">ri-alipay-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-amazon-fill"/>
              <div class="label">ri-amazon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-amazon-line"/>
              <div class="label">ri-amazon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anchor-fill"/>
              <div class="label">ri-anchor-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anchor-line"/>
              <div class="label">ri-anchor-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ancient-gate-fill"/>
              <div class="label">ri-ancient-gate-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ancient-gate-line"/>
              <div class="label">ri-ancient-gate-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ancient-pavilion-fill"/>
              <div class="label">ri-ancient-pavilion-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ancient-pavilion-line"/>
              <div class="label">ri-ancient-pavilion-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-android-fill"/>
              <div class="label">ri-android-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-android-line"/>
              <div class="label">ri-android-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-angularjs-fill"/>
              <div class="label">ri-angularjs-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-angularjs-line"/>
              <div class="label">ri-angularjs-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anticlockwise-2-fill"/>
              <div class="label">ri-anticlockwise-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anticlockwise-2-line"/>
              <div class="label">ri-anticlockwise-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anticlockwise-fill"/>
              <div class="label">ri-anticlockwise-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-anticlockwise-line"/>
              <div class="label">ri-anticlockwise-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-app-store-fill"/>
              <div class="label">ri-app-store-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-app-store-line"/>
              <div class="label">ri-app-store-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apple-fill"/>
              <div class="label">ri-apple-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apple-line"/>
              <div class="label">ri-apple-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apps-2-fill"/>
              <div class="label">ri-apps-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apps-2-line"/>
              <div class="label">ri-apps-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apps-fill"/>
              <div class="label">ri-apps-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-apps-line"/>
              <div class="label">ri-apps-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-archive-drawer-fill"/>
              <div class="label">ri-archive-drawer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-archive-drawer-line"/>
              <div class="label">ri-archive-drawer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-archive-fill"/>
              <div class="label">ri-archive-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-archive-line"/>
              <div class="label">ri-archive-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-circle-fill"/>
              <div class="label">ri-arrow-down-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-circle-line"/>
              <div class="label">ri-arrow-down-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-fill"/>
              <div class="label">ri-arrow-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-line"/>
              <div class="label">ri-arrow-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-s-fill"/>
              <div class="label">ri-arrow-down-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-down-s-line"/>
              <div class="label">ri-arrow-down-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-down-fill"/>
              <div class="label">ri-arrow-drop-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-down-line"/>
              <div class="label">ri-arrow-drop-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-left-fill"/>
              <div class="label">ri-arrow-drop-left-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-left-line"/>
              <div class="label">ri-arrow-drop-left-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-right-fill"/>
              <div class="label">ri-arrow-drop-right-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-right-line"/>
              <div class="label">ri-arrow-drop-right-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-up-fill"/>
              <div class="label">ri-arrow-drop-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-drop-up-line"/>
              <div class="label">ri-arrow-drop-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-go-back-fill"/>
              <div class="label">ri-arrow-go-back-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-go-back-line"/>
              <div class="label">ri-arrow-go-back-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-go-forward-fill"/>
              <div class="label">ri-arrow-go-forward-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-go-forward-line"/>
              <div class="label">ri-arrow-go-forward-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-circle-fill"/>
              <div class="label">ri-arrow-left-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-circle-line"/>
              <div class="label">ri-arrow-left-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-down-fill"/>
              <div class="label">ri-arrow-left-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-down-line"/>
              <div class="label">ri-arrow-left-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-fill"/>
              <div class="label">ri-arrow-left-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-line"/>
              <div class="label">ri-arrow-left-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-right-fill"/>
              <div class="label">ri-arrow-left-right-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-right-line"/>
              <div class="label">ri-arrow-left-right-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-s-fill"/>
              <div class="label">ri-arrow-left-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-s-line"/>
              <div class="label">ri-arrow-left-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-up-fill"/>
              <div class="label">ri-arrow-left-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-left-up-line"/>
              <div class="label">ri-arrow-left-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-circle-fill"/>
              <div class="label">ri-arrow-right-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-circle-line"/>
              <div class="label">ri-arrow-right-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-down-fill"/>
              <div class="label">ri-arrow-right-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-down-line"/>
              <div class="label">ri-arrow-right-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-fill"/>
              <div class="label">ri-arrow-right-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-line"/>
              <div class="label">ri-arrow-right-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-s-fill"/>
              <div class="label">ri-arrow-right-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-s-line"/>
              <div class="label">ri-arrow-right-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-up-fill"/>
              <div class="label">ri-arrow-right-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-right-up-line"/>
              <div class="label">ri-arrow-right-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-circle-fill"/>
              <div class="label">ri-arrow-up-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-circle-line"/>
              <div class="label">ri-arrow-up-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-down-fill"/>
              <div class="label">ri-arrow-up-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-down-line"/>
              <div class="label">ri-arrow-up-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-fill"/>
              <div class="label">ri-arrow-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-line"/>
              <div class="label">ri-arrow-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-s-fill"/>
              <div class="label">ri-arrow-up-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-arrow-up-s-line"/>
              <div class="label">ri-arrow-up-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-artboard-2-fill"/>
              <div class="label">ri-artboard-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-artboard-2-line"/>
              <div class="label">ri-artboard-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-artboard-fill"/>
              <div class="label">ri-artboard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-artboard-line"/>
              <div class="label">ri-artboard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-article-fill"/>
              <div class="label">ri-article-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-article-line"/>
              <div class="label">ri-article-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-aspect-ratio-fill"/>
              <div class="label">ri-aspect-ratio-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-aspect-ratio-line"/>
              <div class="label">ri-aspect-ratio-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-asterisk"/>
              <div class="label">ri-asterisk</div>
            </div>
            <div class="icon">
               <x-icon name="ri-at-fill"/>
              <div class="label">ri-at-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-at-line"/>
              <div class="label">ri-at-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-attachment-2"/>
              <div class="label">ri-attachment-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-attachment-fill"/>
              <div class="label">ri-attachment-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-attachment-line"/>
              <div class="label">ri-attachment-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-auction-fill"/>
              <div class="label">ri-auction-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-auction-line"/>
              <div class="label">ri-auction-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-award-fill"/>
              <div class="label">ri-award-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-award-line"/>
              <div class="label">ri-award-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-baidu-fill"/>
              <div class="label">ri-baidu-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-baidu-line"/>
              <div class="label">ri-baidu-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ball-pen-fill"/>
              <div class="label">ri-ball-pen-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ball-pen-line"/>
              <div class="label">ri-ball-pen-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-card-2-fill"/>
              <div class="label">ri-bank-card-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-card-2-line"/>
              <div class="label">ri-bank-card-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-card-fill"/>
              <div class="label">ri-bank-card-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-card-line"/>
              <div class="label">ri-bank-card-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-fill"/>
              <div class="label">ri-bank-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bank-line"/>
              <div class="label">ri-bank-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-2-fill"/>
              <div class="label">ri-bar-chart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-2-line"/>
              <div class="label">ri-bar-chart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-box-fill"/>
              <div class="label">ri-bar-chart-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-box-line"/>
              <div class="label">ri-bar-chart-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-fill"/>
              <div class="label">ri-bar-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-grouped-fill"/>
              <div class="label">ri-bar-chart-grouped-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-grouped-line"/>
              <div class="label">ri-bar-chart-grouped-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-horizontal-fill"/>
              <div class="label">ri-bar-chart-horizontal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-horizontal-line"/>
              <div class="label">ri-bar-chart-horizontal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bar-chart-line"/>
              <div class="label">ri-bar-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barcode-box-fill"/>
              <div class="label">ri-barcode-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barcode-box-line"/>
              <div class="label">ri-barcode-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barcode-fill"/>
              <div class="label">ri-barcode-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barcode-line"/>
              <div class="label">ri-barcode-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barricade-fill"/>
              <div class="label">ri-barricade-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-barricade-line"/>
              <div class="label">ri-barricade-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-base-station-fill"/>
              <div class="label">ri-base-station-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-base-station-line"/>
              <div class="label">ri-base-station-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-basketball-fill"/>
              <div class="label">ri-basketball-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-basketball-line"/>
              <div class="label">ri-basketball-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-2-charge-fill"/>
              <div class="label">ri-battery-2-charge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-2-charge-line"/>
              <div class="label">ri-battery-2-charge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-2-fill"/>
              <div class="label">ri-battery-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-2-line"/>
              <div class="label">ri-battery-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-charge-fill"/>
              <div class="label">ri-battery-charge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-charge-line"/>
              <div class="label">ri-battery-charge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-fill"/>
              <div class="label">ri-battery-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-line"/>
              <div class="label">ri-battery-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-low-fill"/>
              <div class="label">ri-battery-low-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-low-line"/>
              <div class="label">ri-battery-low-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-saver-fill"/>
              <div class="label">ri-battery-saver-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-saver-line"/>
              <div class="label">ri-battery-saver-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-share-fill"/>
              <div class="label">ri-battery-share-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-battery-share-line"/>
              <div class="label">ri-battery-share-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bear-smile-fill"/>
              <div class="label">ri-bear-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bear-smile-line"/>
              <div class="label">ri-bear-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-behance-fill"/>
              <div class="label">ri-behance-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-behance-line"/>
              <div class="label">ri-behance-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bell-fill"/>
              <div class="label">ri-bell-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bell-line"/>
              <div class="label">ri-bell-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bike-fill"/>
              <div class="label">ri-bike-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bike-line"/>
              <div class="label">ri-bike-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bilibili-fill"/>
              <div class="label">ri-bilibili-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bilibili-line"/>
              <div class="label">ri-bilibili-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bill-fill"/>
              <div class="label">ri-bill-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bill-line"/>
              <div class="label">ri-bill-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-billiards-fill"/>
              <div class="label">ri-billiards-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-billiards-line"/>
              <div class="label">ri-billiards-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bit-coin-fill"/>
              <div class="label">ri-bit-coin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bit-coin-line"/>
              <div class="label">ri-bit-coin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-blaze-fill"/>
              <div class="label">ri-blaze-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-blaze-line"/>
              <div class="label">ri-blaze-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bluetooth-connect-fill"/>
              <div class="label">ri-bluetooth-connect-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bluetooth-connect-line"/>
              <div class="label">ri-bluetooth-connect-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bluetooth-fill"/>
              <div class="label">ri-bluetooth-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bluetooth-line"/>
              <div class="label">ri-bluetooth-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-blur-off-fill"/>
              <div class="label">ri-blur-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-blur-off-line"/>
              <div class="label">ri-blur-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-body-scan-fill"/>
              <div class="label">ri-body-scan-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-body-scan-line"/>
              <div class="label">ri-body-scan-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bold"/>
              <div class="label">ri-bold</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-2-fill"/>
              <div class="label">ri-book-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-2-line"/>
              <div class="label">ri-book-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-3-fill"/>
              <div class="label">ri-book-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-3-line"/>
              <div class="label">ri-book-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-fill"/>
              <div class="label">ri-book-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-line"/>
              <div class="label">ri-book-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-mark-fill"/>
              <div class="label">ri-book-mark-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-mark-line"/>
              <div class="label">ri-book-mark-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-open-fill"/>
              <div class="label">ri-book-open-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-open-line"/>
              <div class="label">ri-book-open-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-read-fill"/>
              <div class="label">ri-book-read-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-book-read-line"/>
              <div class="label">ri-book-read-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-booklet-fill"/>
              <div class="label">ri-booklet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-booklet-line"/>
              <div class="label">ri-booklet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-2-fill"/>
              <div class="label">ri-bookmark-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-2-line"/>
              <div class="label">ri-bookmark-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-3-fill"/>
              <div class="label">ri-bookmark-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-3-line"/>
              <div class="label">ri-bookmark-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-fill"/>
              <div class="label">ri-bookmark-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bookmark-line"/>
              <div class="label">ri-bookmark-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-boxing-fill"/>
              <div class="label">ri-boxing-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-boxing-line"/>
              <div class="label">ri-boxing-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-braces-fill"/>
              <div class="label">ri-braces-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-braces-line"/>
              <div class="label">ri-braces-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brackets-fill"/>
              <div class="label">ri-brackets-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brackets-line"/>
              <div class="label">ri-brackets-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-2-fill"/>
              <div class="label">ri-briefcase-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-2-line"/>
              <div class="label">ri-briefcase-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-3-fill"/>
              <div class="label">ri-briefcase-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-3-line"/>
              <div class="label">ri-briefcase-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-4-fill"/>
              <div class="label">ri-briefcase-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-4-line"/>
              <div class="label">ri-briefcase-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-5-fill"/>
              <div class="label">ri-briefcase-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-5-line"/>
              <div class="label">ri-briefcase-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-fill"/>
              <div class="label">ri-briefcase-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-briefcase-line"/>
              <div class="label">ri-briefcase-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bring-forward"/>
              <div class="label">ri-bring-forward</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bring-to-front"/>
              <div class="label">ri-bring-to-front</div>
            </div>
            <div class="icon">
               <x-icon name="ri-broadcast-fill"/>
              <div class="label">ri-broadcast-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-broadcast-line"/>
              <div class="label">ri-broadcast-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-2-fill"/>
              <div class="label">ri-brush-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-2-line"/>
              <div class="label">ri-brush-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-3-fill"/>
              <div class="label">ri-brush-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-3-line"/>
              <div class="label">ri-brush-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-4-fill"/>
              <div class="label">ri-brush-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-4-line"/>
              <div class="label">ri-brush-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-fill"/>
              <div class="label">ri-brush-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-brush-line"/>
              <div class="label">ri-brush-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bubble-chart-fill"/>
              <div class="label">ri-bubble-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bubble-chart-line"/>
              <div class="label">ri-bubble-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bug-2-fill"/>
              <div class="label">ri-bug-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bug-2-line"/>
              <div class="label">ri-bug-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bug-fill"/>
              <div class="label">ri-bug-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bug-line"/>
              <div class="label">ri-bug-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-2-fill"/>
              <div class="label">ri-building-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-2-line"/>
              <div class="label">ri-building-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-3-fill"/>
              <div class="label">ri-building-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-3-line"/>
              <div class="label">ri-building-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-4-fill"/>
              <div class="label">ri-building-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-4-line"/>
              <div class="label">ri-building-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-fill"/>
              <div class="label">ri-building-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-building-line"/>
              <div class="label">ri-building-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-2-fill"/>
              <div class="label">ri-bus-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-2-line"/>
              <div class="label">ri-bus-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-fill"/>
              <div class="label">ri-bus-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-line"/>
              <div class="label">ri-bus-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-wifi-fill"/>
              <div class="label">ri-bus-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-bus-wifi-line"/>
              <div class="label">ri-bus-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cactus-fill"/>
              <div class="label">ri-cactus-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cactus-line"/>
              <div class="label">ri-cactus-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-2-fill"/>
              <div class="label">ri-cake-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-2-line"/>
              <div class="label">ri-cake-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-3-fill"/>
              <div class="label">ri-cake-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-3-line"/>
              <div class="label">ri-cake-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-fill"/>
              <div class="label">ri-cake-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cake-line"/>
              <div class="label">ri-cake-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calculator-fill"/>
              <div class="label">ri-calculator-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calculator-line"/>
              <div class="label">ri-calculator-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-2-fill"/>
              <div class="label">ri-calendar-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-2-line"/>
              <div class="label">ri-calendar-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-check-fill"/>
              <div class="label">ri-calendar-check-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-check-line"/>
              <div class="label">ri-calendar-check-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-event-fill"/>
              <div class="label">ri-calendar-event-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-event-line"/>
              <div class="label">ri-calendar-event-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-fill"/>
              <div class="label">ri-calendar-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-line"/>
              <div class="label">ri-calendar-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-todo-fill"/>
              <div class="label">ri-calendar-todo-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-calendar-todo-line"/>
              <div class="label">ri-calendar-todo-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-2-fill"/>
              <div class="label">ri-camera-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-2-line"/>
              <div class="label">ri-camera-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-3-fill"/>
              <div class="label">ri-camera-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-3-line"/>
              <div class="label">ri-camera-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-fill"/>
              <div class="label">ri-camera-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-lens-fill"/>
              <div class="label">ri-camera-lens-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-lens-line"/>
              <div class="label">ri-camera-lens-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-line"/>
              <div class="label">ri-camera-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-off-fill"/>
              <div class="label">ri-camera-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-off-line"/>
              <div class="label">ri-camera-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-switch-fill"/>
              <div class="label">ri-camera-switch-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-camera-switch-line"/>
              <div class="label">ri-camera-switch-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-capsule-fill"/>
              <div class="label">ri-capsule-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-capsule-line"/>
              <div class="label">ri-capsule-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-car-fill"/>
              <div class="label">ri-car-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-car-line"/>
              <div class="label">ri-car-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-car-washing-fill"/>
              <div class="label">ri-car-washing-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-car-washing-line"/>
              <div class="label">ri-car-washing-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-caravan-fill"/>
              <div class="label">ri-caravan-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-caravan-line"/>
              <div class="label">ri-caravan-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cast-fill"/>
              <div class="label">ri-cast-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cast-line"/>
              <div class="label">ri-cast-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cellphone-fill"/>
              <div class="label">ri-cellphone-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cellphone-line"/>
              <div class="label">ri-cellphone-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-celsius-fill"/>
              <div class="label">ri-celsius-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-celsius-line"/>
              <div class="label">ri-celsius-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-centos-fill"/>
              <div class="label">ri-centos-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-centos-line"/>
              <div class="label">ri-centos-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-character-recognition-fill"/>
              <div class="label">ri-character-recognition-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-character-recognition-line"/>
              <div class="label">ri-character-recognition-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-charging-pile-2-fill"/>
              <div class="label">ri-charging-pile-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-charging-pile-2-line"/>
              <div class="label">ri-charging-pile-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-charging-pile-fill"/>
              <div class="label">ri-charging-pile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-charging-pile-line"/>
              <div class="label">ri-charging-pile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-1-fill"/>
              <div class="label">ri-chat-1-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-1-line"/>
              <div class="label">ri-chat-1-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-2-fill"/>
              <div class="label">ri-chat-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-2-line"/>
              <div class="label">ri-chat-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-3-fill"/>
              <div class="label">ri-chat-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-3-line"/>
              <div class="label">ri-chat-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-4-fill"/>
              <div class="label">ri-chat-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-4-line"/>
              <div class="label">ri-chat-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-check-fill"/>
              <div class="label">ri-chat-check-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-check-line"/>
              <div class="label">ri-chat-check-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-delete-fill"/>
              <div class="label">ri-chat-delete-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-delete-line"/>
              <div class="label">ri-chat-delete-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-download-fill"/>
              <div class="label">ri-chat-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-download-line"/>
              <div class="label">ri-chat-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-follow-up-fill"/>
              <div class="label">ri-chat-follow-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-follow-up-line"/>
              <div class="label">ri-chat-follow-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-forward-fill"/>
              <div class="label">ri-chat-forward-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-forward-line"/>
              <div class="label">ri-chat-forward-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-heart-fill"/>
              <div class="label">ri-chat-heart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-heart-line"/>
              <div class="label">ri-chat-heart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-history-fill"/>
              <div class="label">ri-chat-history-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-history-line"/>
              <div class="label">ri-chat-history-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-new-fill"/>
              <div class="label">ri-chat-new-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-new-line"/>
              <div class="label">ri-chat-new-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-off-fill"/>
              <div class="label">ri-chat-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-off-line"/>
              <div class="label">ri-chat-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-poll-fill"/>
              <div class="label">ri-chat-poll-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-poll-line"/>
              <div class="label">ri-chat-poll-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-private-fill"/>
              <div class="label">ri-chat-private-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-private-line"/>
              <div class="label">ri-chat-private-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-quote-fill"/>
              <div class="label">ri-chat-quote-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-quote-line"/>
              <div class="label">ri-chat-quote-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-settings-fill"/>
              <div class="label">ri-chat-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-settings-line"/>
              <div class="label">ri-chat-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-2-fill"/>
              <div class="label">ri-chat-smile-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-2-line"/>
              <div class="label">ri-chat-smile-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-3-fill"/>
              <div class="label">ri-chat-smile-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-3-line"/>
              <div class="label">ri-chat-smile-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-fill"/>
              <div class="label">ri-chat-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-smile-line"/>
              <div class="label">ri-chat-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-upload-fill"/>
              <div class="label">ri-chat-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-upload-line"/>
              <div class="label">ri-chat-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-voice-fill"/>
              <div class="label">ri-chat-voice-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chat-voice-line"/>
              <div class="label">ri-chat-voice-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-check-double-fill"/>
              <div class="label">ri-check-double-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-check-double-line"/>
              <div class="label">ri-check-double-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-check-fill"/>
              <div class="label">ri-check-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-check-line"/>
              <div class="label">ri-check-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-blank-circle-fill"/>
              <div class="label">ri-checkbox-blank-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-blank-circle-line"/>
              <div class="label">ri-checkbox-blank-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-blank-fill"/>
              <div class="label">ri-checkbox-blank-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-blank-line"/>
              <div class="label">ri-checkbox-blank-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-circle-fill"/>
              <div class="label">ri-checkbox-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-circle-line"/>
              <div class="label">ri-checkbox-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-fill"/>
              <div class="label">ri-checkbox-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-indeterminate-fill"/>
              <div class="label">ri-checkbox-indeterminate-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-indeterminate-line"/>
              <div class="label">ri-checkbox-indeterminate-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-line"/>
              <div class="label">ri-checkbox-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-multiple-blank-fill"/>
              <div class="label">ri-checkbox-multiple-blank-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-multiple-blank-line"/>
              <div class="label">ri-checkbox-multiple-blank-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-multiple-fill"/>
              <div class="label">ri-checkbox-multiple-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-checkbox-multiple-line"/>
              <div class="label">ri-checkbox-multiple-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-china-railway-fill"/>
              <div class="label">ri-china-railway-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-china-railway-line"/>
              <div class="label">ri-china-railway-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chrome-fill"/>
              <div class="label">ri-chrome-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-chrome-line"/>
              <div class="label">ri-chrome-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clapperboard-fill"/>
              <div class="label">ri-clapperboard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clapperboard-line"/>
              <div class="label">ri-clapperboard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clipboard-fill"/>
              <div class="label">ri-clipboard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clipboard-line"/>
              <div class="label">ri-clipboard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clockwise-2-fill"/>
              <div class="label">ri-clockwise-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clockwise-2-line"/>
              <div class="label">ri-clockwise-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clockwise-fill"/>
              <div class="label">ri-clockwise-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-clockwise-line"/>
              <div class="label">ri-clockwise-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-close-circle-fill"/>
              <div class="label">ri-close-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-close-circle-line"/>
              <div class="label">ri-close-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-close-fill"/>
              <div class="label">ri-close-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-close-line"/>
              <div class="label">ri-close-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-closed-captioning-fill"/>
              <div class="label">ri-closed-captioning-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-closed-captioning-line"/>
              <div class="label">ri-closed-captioning-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-fill"/>
              <div class="label">ri-cloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-line"/>
              <div class="label">ri-cloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-off-fill"/>
              <div class="label">ri-cloud-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-off-line"/>
              <div class="label">ri-cloud-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-windy-fill"/>
              <div class="label">ri-cloud-windy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloud-windy-line"/>
              <div class="label">ri-cloud-windy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloudy-2-fill"/>
              <div class="label">ri-cloudy-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloudy-2-line"/>
              <div class="label">ri-cloudy-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloudy-fill"/>
              <div class="label">ri-cloudy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cloudy-line"/>
              <div class="label">ri-cloudy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-box-fill"/>
              <div class="label">ri-code-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-box-line"/>
              <div class="label">ri-code-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-fill"/>
              <div class="label">ri-code-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-line"/>
              <div class="label">ri-code-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-s-fill"/>
              <div class="label">ri-code-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-s-line"/>
              <div class="label">ri-code-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-s-slash-fill"/>
              <div class="label">ri-code-s-slash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-s-slash-line"/>
              <div class="label">ri-code-s-slash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-code-view"/>
              <div class="label">ri-code-view</div>
            </div>
            <div class="icon">
               <x-icon name="ri-codepen-fill"/>
              <div class="label">ri-codepen-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-codepen-line"/>
              <div class="label">ri-codepen-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coin-fill"/>
              <div class="label">ri-coin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coin-line"/>
              <div class="label">ri-coin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coins-fill"/>
              <div class="label">ri-coins-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coins-line"/>
              <div class="label">ri-coins-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-collage-fill"/>
              <div class="label">ri-collage-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-collage-line"/>
              <div class="label">ri-collage-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-command-fill"/>
              <div class="label">ri-command-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-command-line"/>
              <div class="label">ri-command-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-community-fill"/>
              <div class="label">ri-community-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-community-line"/>
              <div class="label">ri-community-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-2-fill"/>
              <div class="label">ri-compass-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-2-line"/>
              <div class="label">ri-compass-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-3-fill"/>
              <div class="label">ri-compass-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-3-line"/>
              <div class="label">ri-compass-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-4-fill"/>
              <div class="label">ri-compass-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-4-line"/>
              <div class="label">ri-compass-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-discover-fill"/>
              <div class="label">ri-compass-discover-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-discover-line"/>
              <div class="label">ri-compass-discover-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-fill"/>
              <div class="label">ri-compass-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compass-line"/>
              <div class="label">ri-compass-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compasses-2-fill"/>
              <div class="label">ri-compasses-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compasses-2-line"/>
              <div class="label">ri-compasses-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compasses-fill"/>
              <div class="label">ri-compasses-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-compasses-line"/>
              <div class="label">ri-compasses-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-computer-fill"/>
              <div class="label">ri-computer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-computer-line"/>
              <div class="label">ri-computer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-2-fill"/>
              <div class="label">ri-contacts-book-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-2-line"/>
              <div class="label">ri-contacts-book-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-fill"/>
              <div class="label">ri-contacts-book-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-line"/>
              <div class="label">ri-contacts-book-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-upload-fill"/>
              <div class="label">ri-contacts-book-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-book-upload-line"/>
              <div class="label">ri-contacts-book-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-fill"/>
              <div class="label">ri-contacts-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contacts-line"/>
              <div class="label">ri-contacts-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-2-fill"/>
              <div class="label">ri-contrast-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-2-line"/>
              <div class="label">ri-contrast-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-drop-2-fill"/>
              <div class="label">ri-contrast-drop-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-drop-2-line"/>
              <div class="label">ri-contrast-drop-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-drop-fill"/>
              <div class="label">ri-contrast-drop-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-drop-line"/>
              <div class="label">ri-contrast-drop-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-fill"/>
              <div class="label">ri-contrast-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-contrast-line"/>
              <div class="label">ri-contrast-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copper-coin-fill"/>
              <div class="label">ri-copper-coin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copper-coin-line"/>
              <div class="label">ri-copper-coin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copper-diamond-fill"/>
              <div class="label">ri-copper-diamond-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copper-diamond-line"/>
              <div class="label">ri-copper-diamond-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copyleft-fill"/>
              <div class="label">ri-copyleft-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copyleft-line"/>
              <div class="label">ri-copyleft-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copyright-fill"/>
              <div class="label">ri-copyright-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-copyright-line"/>
              <div class="label">ri-copyright-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coreos-fill"/>
              <div class="label">ri-coreos-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coreos-line"/>
              <div class="label">ri-coreos-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-2-fill"/>
              <div class="label">ri-coupon-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-2-line"/>
              <div class="label">ri-coupon-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-3-fill"/>
              <div class="label">ri-coupon-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-3-line"/>
              <div class="label">ri-coupon-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-4-fill"/>
              <div class="label">ri-coupon-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-4-line"/>
              <div class="label">ri-coupon-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-5-fill"/>
              <div class="label">ri-coupon-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-5-line"/>
              <div class="label">ri-coupon-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-fill"/>
              <div class="label">ri-coupon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-coupon-line"/>
              <div class="label">ri-coupon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cpu-fill"/>
              <div class="label">ri-cpu-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cpu-line"/>
              <div class="label">ri-cpu-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-by-fill"/>
              <div class="label">ri-creative-commons-by-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-by-line"/>
              <div class="label">ri-creative-commons-by-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-fill"/>
              <div class="label">ri-creative-commons-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-line"/>
              <div class="label">ri-creative-commons-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-nc-fill"/>
              <div class="label">ri-creative-commons-nc-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-nc-line"/>
              <div class="label">ri-creative-commons-nc-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-nd-fill"/>
              <div class="label">ri-creative-commons-nd-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-nd-line"/>
              <div class="label">ri-creative-commons-nd-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-sa-fill"/>
              <div class="label">ri-creative-commons-sa-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-sa-line"/>
              <div class="label">ri-creative-commons-sa-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-zero-fill"/>
              <div class="label">ri-creative-commons-zero-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-creative-commons-zero-line"/>
              <div class="label">ri-creative-commons-zero-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-criminal-fill"/>
              <div class="label">ri-criminal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-criminal-line"/>
              <div class="label">ri-criminal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-crop-2-fill"/>
              <div class="label">ri-crop-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-crop-2-line"/>
              <div class="label">ri-crop-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-crop-fill"/>
              <div class="label">ri-crop-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-crop-line"/>
              <div class="label">ri-crop-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-css3-fill"/>
              <div class="label">ri-css3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-css3-line"/>
              <div class="label">ri-css3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cup-fill"/>
              <div class="label">ri-cup-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cup-line"/>
              <div class="label">ri-cup-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-currency-fill"/>
              <div class="label">ri-currency-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-currency-line"/>
              <div class="label">ri-currency-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cursor-fill"/>
              <div class="label">ri-cursor-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-cursor-line"/>
              <div class="label">ri-cursor-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-customer-service-2-fill"/>
              <div class="label">ri-customer-service-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-customer-service-2-line"/>
              <div class="label">ri-customer-service-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-customer-service-fill"/>
              <div class="label">ri-customer-service-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-customer-service-line"/>
              <div class="label">ri-customer-service-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-2-fill"/>
              <div class="label">ri-dashboard-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-2-line"/>
              <div class="label">ri-dashboard-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-3-fill"/>
              <div class="label">ri-dashboard-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-3-line"/>
              <div class="label">ri-dashboard-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-fill"/>
              <div class="label">ri-dashboard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dashboard-line"/>
              <div class="label">ri-dashboard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-database-2-fill"/>
              <div class="label">ri-database-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-database-2-line"/>
              <div class="label">ri-database-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-database-fill"/>
              <div class="label">ri-database-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-database-line"/>
              <div class="label">ri-database-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-back-2-fill"/>
              <div class="label">ri-delete-back-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-back-2-line"/>
              <div class="label">ri-delete-back-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-back-fill"/>
              <div class="label">ri-delete-back-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-back-line"/>
              <div class="label">ri-delete-back-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-2-fill"/>
              <div class="label">ri-delete-bin-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-2-line"/>
              <div class="label">ri-delete-bin-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-3-fill"/>
              <div class="label">ri-delete-bin-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-3-line"/>
              <div class="label">ri-delete-bin-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-4-fill"/>
              <div class="label">ri-delete-bin-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-4-line"/>
              <div class="label">ri-delete-bin-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-5-fill"/>
              <div class="label">ri-delete-bin-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-5-line"/>
              <div class="label">ri-delete-bin-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-6-fill"/>
              <div class="label">ri-delete-bin-6-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-6-line"/>
              <div class="label">ri-delete-bin-6-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-7-fill"/>
              <div class="label">ri-delete-bin-7-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-7-line"/>
              <div class="label">ri-delete-bin-7-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-fill"/>
              <div class="label">ri-delete-bin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-bin-line"/>
              <div class="label">ri-delete-bin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-column"/>
              <div class="label">ri-delete-column</div>
            </div>
            <div class="icon">
               <x-icon name="ri-delete-row"/>
              <div class="label">ri-delete-row</div>
            </div>
            <div class="icon">
               <x-icon name="ri-device-fill"/>
              <div class="label">ri-device-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-device-line"/>
              <div class="label">ri-device-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-device-recover-fill"/>
              <div class="label">ri-device-recover-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-device-recover-line"/>
              <div class="label">ri-device-recover-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dingding-fill"/>
              <div class="label">ri-dingding-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dingding-line"/>
              <div class="label">ri-dingding-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-direction-fill"/>
              <div class="label">ri-direction-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-direction-line"/>
              <div class="label">ri-direction-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-disc-fill"/>
              <div class="label">ri-disc-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-disc-line"/>
              <div class="label">ri-disc-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-discord-fill"/>
              <div class="label">ri-discord-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-discord-line"/>
              <div class="label">ri-discord-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-discuss-fill"/>
              <div class="label">ri-discuss-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-discuss-line"/>
              <div class="label">ri-discuss-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dislike-fill"/>
              <div class="label">ri-dislike-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dislike-line"/>
              <div class="label">ri-dislike-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-disqus-fill"/>
              <div class="label">ri-disqus-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-disqus-line"/>
              <div class="label">ri-disqus-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-divide-fill"/>
              <div class="label">ri-divide-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-divide-line"/>
              <div class="label">ri-divide-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-donut-chart-fill"/>
              <div class="label">ri-donut-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-donut-chart-line"/>
              <div class="label">ri-donut-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-closed-fill"/>
              <div class="label">ri-door-closed-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-closed-line"/>
              <div class="label">ri-door-closed-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-fill"/>
              <div class="label">ri-door-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-line"/>
              <div class="label">ri-door-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-lock-box-fill"/>
              <div class="label">ri-door-lock-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-lock-box-line"/>
              <div class="label">ri-door-lock-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-lock-fill"/>
              <div class="label">ri-door-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-lock-line"/>
              <div class="label">ri-door-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-open-fill"/>
              <div class="label">ri-door-open-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-door-open-line"/>
              <div class="label">ri-door-open-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dossier-fill"/>
              <div class="label">ri-dossier-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dossier-line"/>
              <div class="label">ri-dossier-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-douban-fill"/>
              <div class="label">ri-douban-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-douban-line"/>
              <div class="label">ri-douban-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-double-quotes-l"/>
              <div class="label">ri-double-quotes-l</div>
            </div>
            <div class="icon">
               <x-icon name="ri-double-quotes-r"/>
              <div class="label">ri-double-quotes-r</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-2-fill"/>
              <div class="label">ri-download-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-2-line"/>
              <div class="label">ri-download-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-cloud-2-fill"/>
              <div class="label">ri-download-cloud-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-cloud-2-line"/>
              <div class="label">ri-download-cloud-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-cloud-fill"/>
              <div class="label">ri-download-cloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-cloud-line"/>
              <div class="label">ri-download-cloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-fill"/>
              <div class="label">ri-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-download-line"/>
              <div class="label">ri-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-draft-fill"/>
              <div class="label">ri-draft-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-draft-line"/>
              <div class="label">ri-draft-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-drop-fill"/>
              <div class="label">ri-drag-drop-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-drop-line"/>
              <div class="label">ri-drag-drop-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-move-2-fill"/>
              <div class="label">ri-drag-move-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-move-2-line"/>
              <div class="label">ri-drag-move-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-move-fill"/>
              <div class="label">ri-drag-move-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drag-move-line"/>
              <div class="label">ri-drag-move-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dribbble-fill"/>
              <div class="label">ri-dribbble-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dribbble-line"/>
              <div class="label">ri-dribbble-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drive-fill"/>
              <div class="label">ri-drive-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drive-line"/>
              <div class="label">ri-drive-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drizzle-fill"/>
              <div class="label">ri-drizzle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drizzle-line"/>
              <div class="label">ri-drizzle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drop-fill"/>
              <div class="label">ri-drop-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-drop-line"/>
              <div class="label">ri-drop-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dropbox-fill"/>
              <div class="label">ri-dropbox-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dropbox-line"/>
              <div class="label">ri-dropbox-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dual-sim-1-fill"/>
              <div class="label">ri-dual-sim-1-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dual-sim-1-line"/>
              <div class="label">ri-dual-sim-1-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dual-sim-2-fill"/>
              <div class="label">ri-dual-sim-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dual-sim-2-line"/>
              <div class="label">ri-dual-sim-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dv-fill"/>
              <div class="label">ri-dv-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dv-line"/>
              <div class="label">ri-dv-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dvd-fill"/>
              <div class="label">ri-dvd-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-dvd-line"/>
              <div class="label">ri-dvd-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-e-bike-2-fill"/>
              <div class="label">ri-e-bike-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-e-bike-2-line"/>
              <div class="label">ri-e-bike-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-e-bike-fill"/>
              <div class="label">ri-e-bike-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-e-bike-line"/>
              <div class="label">ri-e-bike-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-earth-fill"/>
              <div class="label">ri-earth-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-earth-line"/>
              <div class="label">ri-earth-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-earthquake-fill"/>
              <div class="label">ri-earthquake-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-earthquake-line"/>
              <div class="label">ri-earthquake-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edge-fill"/>
              <div class="label">ri-edge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edge-line"/>
              <div class="label">ri-edge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-2-fill"/>
              <div class="label">ri-edit-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-2-line"/>
              <div class="label">ri-edit-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-box-fill"/>
              <div class="label">ri-edit-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-box-line"/>
              <div class="label">ri-edit-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-circle-fill"/>
              <div class="label">ri-edit-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-circle-line"/>
              <div class="label">ri-edit-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-fill"/>
              <div class="label">ri-edit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-edit-line"/>
              <div class="label">ri-edit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eject-fill"/>
              <div class="label">ri-eject-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eject-line"/>
              <div class="label">ri-eject-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-2-fill"/>
              <div class="label">ri-emotion-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-2-line"/>
              <div class="label">ri-emotion-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-fill"/>
              <div class="label">ri-emotion-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-happy-fill"/>
              <div class="label">ri-emotion-happy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-happy-line"/>
              <div class="label">ri-emotion-happy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-laugh-fill"/>
              <div class="label">ri-emotion-laugh-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-laugh-line"/>
              <div class="label">ri-emotion-laugh-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-line"/>
              <div class="label">ri-emotion-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-normal-fill"/>
              <div class="label">ri-emotion-normal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-normal-line"/>
              <div class="label">ri-emotion-normal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-sad-fill"/>
              <div class="label">ri-emotion-sad-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-sad-line"/>
              <div class="label">ri-emotion-sad-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-unhappy-fill"/>
              <div class="label">ri-emotion-unhappy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emotion-unhappy-line"/>
              <div class="label">ri-emotion-unhappy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-empathize-fill"/>
              <div class="label">ri-empathize-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-empathize-line"/>
              <div class="label">ri-empathize-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emphasis-cn"/>
              <div class="label">ri-emphasis-cn</div>
            </div>
            <div class="icon">
               <x-icon name="ri-emphasis"/>
              <div class="label">ri-emphasis</div>
            </div>
            <div class="icon">
               <x-icon name="ri-english-input"/>
              <div class="label">ri-english-input</div>
            </div>
            <div class="icon">
               <x-icon name="ri-equalizer-fill"/>
              <div class="label">ri-equalizer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-equalizer-line"/>
              <div class="label">ri-equalizer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eraser-fill"/>
              <div class="label">ri-eraser-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eraser-line"/>
              <div class="label">ri-eraser-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-error-warning-fill"/>
              <div class="label">ri-error-warning-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-error-warning-line"/>
              <div class="label">ri-error-warning-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-evernote-fill"/>
              <div class="label">ri-evernote-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-evernote-line"/>
              <div class="label">ri-evernote-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-box-fill"/>
              <div class="label">ri-exchange-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-box-line"/>
              <div class="label">ri-exchange-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-cny-fill"/>
              <div class="label">ri-exchange-cny-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-cny-line"/>
              <div class="label">ri-exchange-cny-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-dollar-fill"/>
              <div class="label">ri-exchange-dollar-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-dollar-line"/>
              <div class="label">ri-exchange-dollar-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-fill"/>
              <div class="label">ri-exchange-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-funds-fill"/>
              <div class="label">ri-exchange-funds-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-funds-line"/>
              <div class="label">ri-exchange-funds-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-exchange-line"/>
              <div class="label">ri-exchange-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-external-link-fill"/>
              <div class="label">ri-external-link-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-external-link-line"/>
              <div class="label">ri-external-link-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-2-fill"/>
              <div class="label">ri-eye-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-2-line"/>
              <div class="label">ri-eye-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-close-fill"/>
              <div class="label">ri-eye-close-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-close-line"/>
              <div class="label">ri-eye-close-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-fill"/>
              <div class="label">ri-eye-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-line"/>
              <div class="label">ri-eye-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-off-fill"/>
              <div class="label">ri-eye-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-eye-off-line"/>
              <div class="label">ri-eye-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-box-fill"/>
              <div class="label">ri-facebook-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-box-line"/>
              <div class="label">ri-facebook-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-circle-fill"/>
              <div class="label">ri-facebook-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-circle-line"/>
              <div class="label">ri-facebook-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-fill"/>
              <div class="label">ri-facebook-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-facebook-line"/>
              <div class="label">ri-facebook-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fahrenheit-fill"/>
              <div class="label">ri-fahrenheit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fahrenheit-line"/>
              <div class="label">ri-fahrenheit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-feedback-fill"/>
              <div class="label">ri-feedback-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-feedback-line"/>
              <div class="label">ri-feedback-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-2-fill"/>
              <div class="label">ri-file-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-2-line"/>
              <div class="label">ri-file-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-3-fill"/>
              <div class="label">ri-file-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-3-line"/>
              <div class="label">ri-file-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-4-fill"/>
              <div class="label">ri-file-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-4-line"/>
              <div class="label">ri-file-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-add-fill"/>
              <div class="label">ri-file-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-add-line"/>
              <div class="label">ri-file-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-chart-2-fill"/>
              <div class="label">ri-file-chart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-chart-2-line"/>
              <div class="label">ri-file-chart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-chart-fill"/>
              <div class="label">ri-file-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-chart-line"/>
              <div class="label">ri-file-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-cloud-fill"/>
              <div class="label">ri-file-cloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-cloud-line"/>
              <div class="label">ri-file-cloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-code-fill"/>
              <div class="label">ri-file-code-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-code-line"/>
              <div class="label">ri-file-code-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-copy-2-fill"/>
              <div class="label">ri-file-copy-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-copy-2-line"/>
              <div class="label">ri-file-copy-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-copy-fill"/>
              <div class="label">ri-file-copy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-copy-line"/>
              <div class="label">ri-file-copy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-damage-fill"/>
              <div class="label">ri-file-damage-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-damage-line"/>
              <div class="label">ri-file-damage-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-download-fill"/>
              <div class="label">ri-file-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-download-line"/>
              <div class="label">ri-file-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-edit-fill"/>
              <div class="label">ri-file-edit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-edit-line"/>
              <div class="label">ri-file-edit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-excel-2-fill"/>
              <div class="label">ri-file-excel-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-excel-2-line"/>
              <div class="label">ri-file-excel-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-excel-fill"/>
              <div class="label">ri-file-excel-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-excel-line"/>
              <div class="label">ri-file-excel-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-fill"/>
              <div class="label">ri-file-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-forbid-fill"/>
              <div class="label">ri-file-forbid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-forbid-line"/>
              <div class="label">ri-file-forbid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-gif-fill"/>
              <div class="label">ri-file-gif-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-gif-line"/>
              <div class="label">ri-file-gif-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-history-fill"/>
              <div class="label">ri-file-history-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-history-line"/>
              <div class="label">ri-file-history-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-hwp-fill"/>
              <div class="label">ri-file-hwp-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-hwp-line"/>
              <div class="label">ri-file-hwp-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-info-fill"/>
              <div class="label">ri-file-info-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-info-line"/>
              <div class="label">ri-file-info-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-line"/>
              <div class="label">ri-file-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-2-fill"/>
              <div class="label">ri-file-list-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-2-line"/>
              <div class="label">ri-file-list-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-3-fill"/>
              <div class="label">ri-file-list-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-3-line"/>
              <div class="label">ri-file-list-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-fill"/>
              <div class="label">ri-file-list-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-list-line"/>
              <div class="label">ri-file-list-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-lock-fill"/>
              <div class="label">ri-file-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-lock-line"/>
              <div class="label">ri-file-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-mark-fill"/>
              <div class="label">ri-file-mark-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-mark-line"/>
              <div class="label">ri-file-mark-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-music-fill"/>
              <div class="label">ri-file-music-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-music-line"/>
              <div class="label">ri-file-music-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-paper-2-fill"/>
              <div class="label">ri-file-paper-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-paper-2-line"/>
              <div class="label">ri-file-paper-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-paper-fill"/>
              <div class="label">ri-file-paper-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-paper-line"/>
              <div class="label">ri-file-paper-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-pdf-fill"/>
              <div class="label">ri-file-pdf-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-pdf-line"/>
              <div class="label">ri-file-pdf-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-ppt-2-fill"/>
              <div class="label">ri-file-ppt-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-ppt-2-line"/>
              <div class="label">ri-file-ppt-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-ppt-fill"/>
              <div class="label">ri-file-ppt-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-ppt-line"/>
              <div class="label">ri-file-ppt-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-reduce-fill"/>
              <div class="label">ri-file-reduce-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-reduce-line"/>
              <div class="label">ri-file-reduce-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-search-fill"/>
              <div class="label">ri-file-search-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-search-line"/>
              <div class="label">ri-file-search-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-settings-fill"/>
              <div class="label">ri-file-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-settings-line"/>
              <div class="label">ri-file-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shield-2-fill"/>
              <div class="label">ri-file-shield-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shield-2-line"/>
              <div class="label">ri-file-shield-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shield-fill"/>
              <div class="label">ri-file-shield-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shield-line"/>
              <div class="label">ri-file-shield-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shred-fill"/>
              <div class="label">ri-file-shred-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-shred-line"/>
              <div class="label">ri-file-shred-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-text-fill"/>
              <div class="label">ri-file-text-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-text-line"/>
              <div class="label">ri-file-text-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-transfer-fill"/>
              <div class="label">ri-file-transfer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-transfer-line"/>
              <div class="label">ri-file-transfer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-unknow-fill"/>
              <div class="label">ri-file-unknow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-unknow-line"/>
              <div class="label">ri-file-unknow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-upload-fill"/>
              <div class="label">ri-file-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-upload-line"/>
              <div class="label">ri-file-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-user-fill"/>
              <div class="label">ri-file-user-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-user-line"/>
              <div class="label">ri-file-user-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-warning-fill"/>
              <div class="label">ri-file-warning-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-warning-line"/>
              <div class="label">ri-file-warning-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-word-2-fill"/>
              <div class="label">ri-file-word-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-word-2-line"/>
              <div class="label">ri-file-word-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-word-fill"/>
              <div class="label">ri-file-word-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-word-line"/>
              <div class="label">ri-file-word-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-zip-fill"/>
              <div class="label">ri-file-zip-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-file-zip-line"/>
              <div class="label">ri-file-zip-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-film-fill"/>
              <div class="label">ri-film-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-film-line"/>
              <div class="label">ri-film-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-2-fill"/>
              <div class="label">ri-filter-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-2-line"/>
              <div class="label">ri-filter-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-3-fill"/>
              <div class="label">ri-filter-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-3-line"/>
              <div class="label">ri-filter-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-fill"/>
              <div class="label">ri-filter-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-line"/>
              <div class="label">ri-filter-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-off-fill"/>
              <div class="label">ri-filter-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-filter-off-line"/>
              <div class="label">ri-filter-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-find-replace-fill"/>
              <div class="label">ri-find-replace-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-find-replace-line"/>
              <div class="label">ri-find-replace-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-finder-fill"/>
              <div class="label">ri-finder-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-finder-line"/>
              <div class="label">ri-finder-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fingerprint-2-fill"/>
              <div class="label">ri-fingerprint-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fingerprint-2-line"/>
              <div class="label">ri-fingerprint-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fingerprint-fill"/>
              <div class="label">ri-fingerprint-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fingerprint-line"/>
              <div class="label">ri-fingerprint-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fire-fill"/>
              <div class="label">ri-fire-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fire-line"/>
              <div class="label">ri-fire-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-firefox-fill"/>
              <div class="label">ri-firefox-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-firefox-line"/>
              <div class="label">ri-firefox-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-first-aid-kit-fill"/>
              <div class="label">ri-first-aid-kit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-first-aid-kit-line"/>
              <div class="label">ri-first-aid-kit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flag-2-fill"/>
              <div class="label">ri-flag-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flag-2-line"/>
              <div class="label">ri-flag-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flag-fill"/>
              <div class="label">ri-flag-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flag-line"/>
              <div class="label">ri-flag-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flashlight-fill"/>
              <div class="label">ri-flashlight-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flashlight-line"/>
              <div class="label">ri-flashlight-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flask-fill"/>
              <div class="label">ri-flask-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flask-line"/>
              <div class="label">ri-flask-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flight-land-fill"/>
              <div class="label">ri-flight-land-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flight-land-line"/>
              <div class="label">ri-flight-land-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flight-takeoff-fill"/>
              <div class="label">ri-flight-takeoff-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flight-takeoff-line"/>
              <div class="label">ri-flight-takeoff-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flood-fill"/>
              <div class="label">ri-flood-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flood-line"/>
              <div class="label">ri-flood-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flow-chart"/>
              <div class="label">ri-flow-chart</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flutter-fill"/>
              <div class="label">ri-flutter-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-flutter-line"/>
              <div class="label">ri-flutter-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-2-fill"/>
              <div class="label">ri-focus-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-2-line"/>
              <div class="label">ri-focus-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-3-fill"/>
              <div class="label">ri-focus-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-3-line"/>
              <div class="label">ri-focus-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-fill"/>
              <div class="label">ri-focus-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-focus-line"/>
              <div class="label">ri-focus-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-foggy-fill"/>
              <div class="label">ri-foggy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-foggy-line"/>
              <div class="label">ri-foggy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-2-fill"/>
              <div class="label">ri-folder-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-2-line"/>
              <div class="label">ri-folder-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-3-fill"/>
              <div class="label">ri-folder-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-3-line"/>
              <div class="label">ri-folder-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-4-fill"/>
              <div class="label">ri-folder-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-4-line"/>
              <div class="label">ri-folder-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-5-fill"/>
              <div class="label">ri-folder-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-5-line"/>
              <div class="label">ri-folder-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-add-fill"/>
              <div class="label">ri-folder-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-add-line"/>
              <div class="label">ri-folder-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-chart-2-fill"/>
              <div class="label">ri-folder-chart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-chart-2-line"/>
              <div class="label">ri-folder-chart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-chart-fill"/>
              <div class="label">ri-folder-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-chart-line"/>
              <div class="label">ri-folder-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-download-fill"/>
              <div class="label">ri-folder-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-download-line"/>
              <div class="label">ri-folder-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-fill"/>
              <div class="label">ri-folder-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-forbid-fill"/>
              <div class="label">ri-folder-forbid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-forbid-line"/>
              <div class="label">ri-folder-forbid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-history-fill"/>
              <div class="label">ri-folder-history-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-history-line"/>
              <div class="label">ri-folder-history-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-info-fill"/>
              <div class="label">ri-folder-info-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-info-line"/>
              <div class="label">ri-folder-info-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-keyhole-fill"/>
              <div class="label">ri-folder-keyhole-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-keyhole-line"/>
              <div class="label">ri-folder-keyhole-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-line"/>
              <div class="label">ri-folder-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-lock-fill"/>
              <div class="label">ri-folder-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-lock-line"/>
              <div class="label">ri-folder-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-music-fill"/>
              <div class="label">ri-folder-music-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-music-line"/>
              <div class="label">ri-folder-music-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-open-fill"/>
              <div class="label">ri-folder-open-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-open-line"/>
              <div class="label">ri-folder-open-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-received-fill"/>
              <div class="label">ri-folder-received-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-received-line"/>
              <div class="label">ri-folder-received-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-reduce-fill"/>
              <div class="label">ri-folder-reduce-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-reduce-line"/>
              <div class="label">ri-folder-reduce-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-settings-fill"/>
              <div class="label">ri-folder-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-settings-line"/>
              <div class="label">ri-folder-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shared-fill"/>
              <div class="label">ri-folder-shared-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shared-line"/>
              <div class="label">ri-folder-shared-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shield-2-fill"/>
              <div class="label">ri-folder-shield-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shield-2-line"/>
              <div class="label">ri-folder-shield-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shield-fill"/>
              <div class="label">ri-folder-shield-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-shield-line"/>
              <div class="label">ri-folder-shield-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-transfer-fill"/>
              <div class="label">ri-folder-transfer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-transfer-line"/>
              <div class="label">ri-folder-transfer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-unknow-fill"/>
              <div class="label">ri-folder-unknow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-unknow-line"/>
              <div class="label">ri-folder-unknow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-upload-fill"/>
              <div class="label">ri-folder-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-upload-line"/>
              <div class="label">ri-folder-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-user-fill"/>
              <div class="label">ri-folder-user-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-user-line"/>
              <div class="label">ri-folder-user-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-warning-fill"/>
              <div class="label">ri-folder-warning-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-warning-line"/>
              <div class="label">ri-folder-warning-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-zip-fill"/>
              <div class="label">ri-folder-zip-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folder-zip-line"/>
              <div class="label">ri-folder-zip-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folders-fill"/>
              <div class="label">ri-folders-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-folders-line"/>
              <div class="label">ri-folders-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-font-color"/>
              <div class="label">ri-font-color</div>
            </div>
            <div class="icon">
               <x-icon name="ri-font-size-2"/>
              <div class="label">ri-font-size-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-font-size"/>
              <div class="label">ri-font-size</div>
            </div>
            <div class="icon">
               <x-icon name="ri-football-fill"/>
              <div class="label">ri-football-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-football-line"/>
              <div class="label">ri-football-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-footprint-fill"/>
              <div class="label">ri-footprint-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-footprint-line"/>
              <div class="label">ri-footprint-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-forbid-2-fill"/>
              <div class="label">ri-forbid-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-forbid-2-line"/>
              <div class="label">ri-forbid-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-forbid-fill"/>
              <div class="label">ri-forbid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-forbid-line"/>
              <div class="label">ri-forbid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-format-clear"/>
              <div class="label">ri-format-clear</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fridge-fill"/>
              <div class="label">ri-fridge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fridge-line"/>
              <div class="label">ri-fridge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fullscreen-exit-fill"/>
              <div class="label">ri-fullscreen-exit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fullscreen-exit-line"/>
              <div class="label">ri-fullscreen-exit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fullscreen-fill"/>
              <div class="label">ri-fullscreen-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-fullscreen-line"/>
              <div class="label">ri-fullscreen-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-function-fill"/>
              <div class="label">ri-function-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-function-line"/>
              <div class="label">ri-function-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-functions"/>
              <div class="label">ri-functions</div>
            </div>
            <div class="icon">
               <x-icon name="ri-funds-box-fill"/>
              <div class="label">ri-funds-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-funds-box-line"/>
              <div class="label">ri-funds-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-funds-fill"/>
              <div class="label">ri-funds-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-funds-line"/>
              <div class="label">ri-funds-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gallery-fill"/>
              <div class="label">ri-gallery-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gallery-line"/>
              <div class="label">ri-gallery-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gallery-upload-fill"/>
              <div class="label">ri-gallery-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gallery-upload-line"/>
              <div class="label">ri-gallery-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-game-fill"/>
              <div class="label">ri-game-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-game-line"/>
              <div class="label">ri-game-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gamepad-fill"/>
              <div class="label">ri-gamepad-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gamepad-line"/>
              <div class="label">ri-gamepad-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gas-station-fill"/>
              <div class="label">ri-gas-station-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gas-station-line"/>
              <div class="label">ri-gas-station-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gatsby-fill"/>
              <div class="label">ri-gatsby-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gatsby-line"/>
              <div class="label">ri-gatsby-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-genderless-fill"/>
              <div class="label">ri-genderless-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-genderless-line"/>
              <div class="label">ri-genderless-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-2-fill"/>
              <div class="label">ri-ghost-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-2-line"/>
              <div class="label">ri-ghost-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-fill"/>
              <div class="label">ri-ghost-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-line"/>
              <div class="label">ri-ghost-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-smile-fill"/>
              <div class="label">ri-ghost-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ghost-smile-line"/>
              <div class="label">ri-ghost-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gift-2-fill"/>
              <div class="label">ri-gift-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gift-2-line"/>
              <div class="label">ri-gift-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gift-fill"/>
              <div class="label">ri-gift-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gift-line"/>
              <div class="label">ri-gift-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-branch-fill"/>
              <div class="label">ri-git-branch-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-branch-line"/>
              <div class="label">ri-git-branch-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-commit-fill"/>
              <div class="label">ri-git-commit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-commit-line"/>
              <div class="label">ri-git-commit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-merge-fill"/>
              <div class="label">ri-git-merge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-merge-line"/>
              <div class="label">ri-git-merge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-pull-request-fill"/>
              <div class="label">ri-git-pull-request-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-pull-request-line"/>
              <div class="label">ri-git-pull-request-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-commits-fill"/>
              <div class="label">ri-git-repository-commits-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-commits-line"/>
              <div class="label">ri-git-repository-commits-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-fill"/>
              <div class="label">ri-git-repository-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-line"/>
              <div class="label">ri-git-repository-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-private-fill"/>
              <div class="label">ri-git-repository-private-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-git-repository-private-line"/>
              <div class="label">ri-git-repository-private-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-github-fill"/>
              <div class="label">ri-github-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-github-line"/>
              <div class="label">ri-github-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gitlab-fill"/>
              <div class="label">ri-gitlab-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gitlab-line"/>
              <div class="label">ri-gitlab-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-global-fill"/>
              <div class="label">ri-global-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-global-line"/>
              <div class="label">ri-global-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-globe-fill"/>
              <div class="label">ri-globe-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-globe-line"/>
              <div class="label">ri-globe-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-goblet-fill"/>
              <div class="label">ri-goblet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-goblet-line"/>
              <div class="label">ri-goblet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-google-fill"/>
              <div class="label">ri-google-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-google-line"/>
              <div class="label">ri-google-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-google-play-fill"/>
              <div class="label">ri-google-play-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-google-play-line"/>
              <div class="label">ri-google-play-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-government-fill"/>
              <div class="label">ri-government-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-government-line"/>
              <div class="label">ri-government-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gps-fill"/>
              <div class="label">ri-gps-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gps-line"/>
              <div class="label">ri-gps-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gradienter-fill"/>
              <div class="label">ri-gradienter-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-gradienter-line"/>
              <div class="label">ri-gradienter-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-grid-fill"/>
              <div class="label">ri-grid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-grid-line"/>
              <div class="label">ri-grid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-group-2-fill"/>
              <div class="label">ri-group-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-group-2-line"/>
              <div class="label">ri-group-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-group-fill"/>
              <div class="label">ri-group-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-group-line"/>
              <div class="label">ri-group-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-guide-fill"/>
              <div class="label">ri-guide-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-guide-line"/>
              <div class="label">ri-guide-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-1"/>
              <div class="label">ri-h-1</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-2"/>
              <div class="label">ri-h-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-3"/>
              <div class="label">ri-h-3</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-4"/>
              <div class="label">ri-h-4</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-5"/>
              <div class="label">ri-h-5</div>
            </div>
            <div class="icon">
               <x-icon name="ri-h-6"/>
              <div class="label">ri-h-6</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hail-fill"/>
              <div class="label">ri-hail-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hail-line"/>
              <div class="label">ri-hail-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hammer-fill"/>
              <div class="label">ri-hammer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hammer-line"/>
              <div class="label">ri-hammer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-coin-fill"/>
              <div class="label">ri-hand-coin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-coin-line"/>
              <div class="label">ri-hand-coin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-heart-fill"/>
              <div class="label">ri-hand-heart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-heart-line"/>
              <div class="label">ri-hand-heart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-sanitizer-fill"/>
              <div class="label">ri-hand-sanitizer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hand-sanitizer-line"/>
              <div class="label">ri-hand-sanitizer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-handbag-fill"/>
              <div class="label">ri-handbag-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-handbag-line"/>
              <div class="label">ri-handbag-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hard-drive-2-fill"/>
              <div class="label">ri-hard-drive-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hard-drive-2-line"/>
              <div class="label">ri-hard-drive-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hard-drive-fill"/>
              <div class="label">ri-hard-drive-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hard-drive-line"/>
              <div class="label">ri-hard-drive-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hashtag"/>
              <div class="label">ri-hashtag</div>
            </div>
            <div class="icon">
               <x-icon name="ri-haze-2-fill"/>
              <div class="label">ri-haze-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-haze-2-line"/>
              <div class="label">ri-haze-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-haze-fill"/>
              <div class="label">ri-haze-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-haze-line"/>
              <div class="label">ri-haze-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hd-fill"/>
              <div class="label">ri-hd-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hd-line"/>
              <div class="label">ri-hd-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heading"/>
              <div class="label">ri-heading</div>
            </div>
            <div class="icon">
               <x-icon name="ri-headphone-fill"/>
              <div class="label">ri-headphone-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-headphone-line"/>
              <div class="label">ri-headphone-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-health-book-fill"/>
              <div class="label">ri-health-book-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-health-book-line"/>
              <div class="label">ri-health-book-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-2-fill"/>
              <div class="label">ri-heart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-2-line"/>
              <div class="label">ri-heart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-3-fill"/>
              <div class="label">ri-heart-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-3-line"/>
              <div class="label">ri-heart-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-add-fill"/>
              <div class="label">ri-heart-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-add-line"/>
              <div class="label">ri-heart-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-fill"/>
              <div class="label">ri-heart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-line"/>
              <div class="label">ri-heart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-pulse-fill"/>
              <div class="label">ri-heart-pulse-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heart-pulse-line"/>
              <div class="label">ri-heart-pulse-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hearts-fill"/>
              <div class="label">ri-hearts-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hearts-line"/>
              <div class="label">ri-hearts-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heavy-showers-fill"/>
              <div class="label">ri-heavy-showers-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-heavy-showers-line"/>
              <div class="label">ri-heavy-showers-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-history-fill"/>
              <div class="label">ri-history-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-history-line"/>
              <div class="label">ri-history-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-2-fill"/>
              <div class="label">ri-home-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-2-line"/>
              <div class="label">ri-home-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-3-fill"/>
              <div class="label">ri-home-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-3-line"/>
              <div class="label">ri-home-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-4-fill"/>
              <div class="label">ri-home-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-4-line"/>
              <div class="label">ri-home-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-5-fill"/>
              <div class="label">ri-home-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-5-line"/>
              <div class="label">ri-home-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-6-fill"/>
              <div class="label">ri-home-6-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-6-line"/>
              <div class="label">ri-home-6-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-7-fill"/>
              <div class="label">ri-home-7-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-7-line"/>
              <div class="label">ri-home-7-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-8-fill"/>
              <div class="label">ri-home-8-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-8-line"/>
              <div class="label">ri-home-8-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-fill"/>
              <div class="label">ri-home-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-gear-fill"/>
              <div class="label">ri-home-gear-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-gear-line"/>
              <div class="label">ri-home-gear-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-heart-fill"/>
              <div class="label">ri-home-heart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-heart-line"/>
              <div class="label">ri-home-heart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-line"/>
              <div class="label">ri-home-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-smile-2-fill"/>
              <div class="label">ri-home-smile-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-smile-2-line"/>
              <div class="label">ri-home-smile-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-smile-fill"/>
              <div class="label">ri-home-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-smile-line"/>
              <div class="label">ri-home-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-wifi-fill"/>
              <div class="label">ri-home-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-home-wifi-line"/>
              <div class="label">ri-home-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-honor-of-kings-fill"/>
              <div class="label">ri-honor-of-kings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-honor-of-kings-line"/>
              <div class="label">ri-honor-of-kings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-honour-fill"/>
              <div class="label">ri-honour-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-honour-line"/>
              <div class="label">ri-honour-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hospital-fill"/>
              <div class="label">ri-hospital-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hospital-line"/>
              <div class="label">ri-hospital-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotel-bed-fill"/>
              <div class="label">ri-hotel-bed-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotel-bed-line"/>
              <div class="label">ri-hotel-bed-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotel-fill"/>
              <div class="label">ri-hotel-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotel-line"/>
              <div class="label">ri-hotel-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotspot-fill"/>
              <div class="label">ri-hotspot-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hotspot-line"/>
              <div class="label">ri-hotspot-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hq-fill"/>
              <div class="label">ri-hq-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-hq-line"/>
              <div class="label">ri-hq-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-html5-fill"/>
              <div class="label">ri-html5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-html5-line"/>
              <div class="label">ri-html5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ie-fill"/>
              <div class="label">ri-ie-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ie-line"/>
              <div class="label">ri-ie-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-2-fill"/>
              <div class="label">ri-image-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-2-line"/>
              <div class="label">ri-image-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-add-fill"/>
              <div class="label">ri-image-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-add-line"/>
              <div class="label">ri-image-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-edit-fill"/>
              <div class="label">ri-image-edit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-edit-line"/>
              <div class="label">ri-image-edit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-fill"/>
              <div class="label">ri-image-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-image-line"/>
              <div class="label">ri-image-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-archive-fill"/>
              <div class="label">ri-inbox-archive-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-archive-line"/>
              <div class="label">ri-inbox-archive-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-fill"/>
              <div class="label">ri-inbox-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-line"/>
              <div class="label">ri-inbox-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-unarchive-fill"/>
              <div class="label">ri-inbox-unarchive-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-inbox-unarchive-line"/>
              <div class="label">ri-inbox-unarchive-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-increase-decrease-fill"/>
              <div class="label">ri-increase-decrease-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-increase-decrease-line"/>
              <div class="label">ri-increase-decrease-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-indent-decrease"/>
              <div class="label">ri-indent-decrease</div>
            </div>
            <div class="icon">
               <x-icon name="ri-indent-increase"/>
              <div class="label">ri-indent-increase</div>
            </div>
            <div class="icon">
               <x-icon name="ri-indeterminate-circle-fill"/>
              <div class="label">ri-indeterminate-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-indeterminate-circle-line"/>
              <div class="label">ri-indeterminate-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-information-fill"/>
              <div class="label">ri-information-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-information-line"/>
              <div class="label">ri-information-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-infrared-thermometer-fill"/>
              <div class="label">ri-infrared-thermometer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-infrared-thermometer-line"/>
              <div class="label">ri-infrared-thermometer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ink-bottle-fill"/>
              <div class="label">ri-ink-bottle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ink-bottle-line"/>
              <div class="label">ri-ink-bottle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-input-cursor-move"/>
              <div class="label">ri-input-cursor-move</div>
            </div>
            <div class="icon">
               <x-icon name="ri-input-method-fill"/>
              <div class="label">ri-input-method-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-input-method-line"/>
              <div class="label">ri-input-method-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-insert-column-left"/>
              <div class="label">ri-insert-column-left</div>
            </div>
            <div class="icon">
               <x-icon name="ri-insert-column-right"/>
              <div class="label">ri-insert-column-right</div>
            </div>
            <div class="icon">
               <x-icon name="ri-insert-row-bottom"/>
              <div class="label">ri-insert-row-bottom</div>
            </div>
            <div class="icon">
               <x-icon name="ri-insert-row-top"/>
              <div class="label">ri-insert-row-top</div>
            </div>
            <div class="icon">
               <x-icon name="ri-instagram-fill"/>
              <div class="label">ri-instagram-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-instagram-line"/>
              <div class="label">ri-instagram-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-install-fill"/>
              <div class="label">ri-install-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-install-line"/>
              <div class="label">ri-install-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-invision-fill"/>
              <div class="label">ri-invision-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-invision-line"/>
              <div class="label">ri-invision-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-italic"/>
              <div class="label">ri-italic</div>
            </div>
            <div class="icon">
               <x-icon name="ri-kakao-talk-fill"/>
              <div class="label">ri-kakao-talk-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-kakao-talk-line"/>
              <div class="label">ri-kakao-talk-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-key-2-fill"/>
              <div class="label">ri-key-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-key-2-line"/>
              <div class="label">ri-key-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-key-fill"/>
              <div class="label">ri-key-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-key-line"/>
              <div class="label">ri-key-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keyboard-box-fill"/>
              <div class="label">ri-keyboard-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keyboard-box-line"/>
              <div class="label">ri-keyboard-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keyboard-fill"/>
              <div class="label">ri-keyboard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keyboard-line"/>
              <div class="label">ri-keyboard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keynote-fill"/>
              <div class="label">ri-keynote-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-keynote-line"/>
              <div class="label">ri-keynote-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-knife-blood-fill"/>
              <div class="label">ri-knife-blood-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-knife-blood-line"/>
              <div class="label">ri-knife-blood-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-knife-fill"/>
              <div class="label">ri-knife-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-knife-line"/>
              <div class="label">ri-knife-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-landscape-fill"/>
              <div class="label">ri-landscape-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-landscape-line"/>
              <div class="label">ri-landscape-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-2-fill"/>
              <div class="label">ri-layout-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-2-line"/>
              <div class="label">ri-layout-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-3-fill"/>
              <div class="label">ri-layout-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-3-line"/>
              <div class="label">ri-layout-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-4-fill"/>
              <div class="label">ri-layout-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-4-line"/>
              <div class="label">ri-layout-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-5-fill"/>
              <div class="label">ri-layout-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-5-line"/>
              <div class="label">ri-layout-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-6-fill"/>
              <div class="label">ri-layout-6-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-6-line"/>
              <div class="label">ri-layout-6-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-bottom-2-fill"/>
              <div class="label">ri-layout-bottom-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-bottom-2-line"/>
              <div class="label">ri-layout-bottom-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-bottom-fill"/>
              <div class="label">ri-layout-bottom-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-bottom-line"/>
              <div class="label">ri-layout-bottom-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-column-fill"/>
              <div class="label">ri-layout-column-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-column-line"/>
              <div class="label">ri-layout-column-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-fill"/>
              <div class="label">ri-layout-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-grid-fill"/>
              <div class="label">ri-layout-grid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-grid-line"/>
              <div class="label">ri-layout-grid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-left-2-fill"/>
              <div class="label">ri-layout-left-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-left-2-line"/>
              <div class="label">ri-layout-left-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-left-fill"/>
              <div class="label">ri-layout-left-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-left-line"/>
              <div class="label">ri-layout-left-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-line"/>
              <div class="label">ri-layout-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-masonry-fill"/>
              <div class="label">ri-layout-masonry-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-masonry-line"/>
              <div class="label">ri-layout-masonry-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-right-2-fill"/>
              <div class="label">ri-layout-right-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-right-2-line"/>
              <div class="label">ri-layout-right-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-right-fill"/>
              <div class="label">ri-layout-right-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-right-line"/>
              <div class="label">ri-layout-right-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-row-fill"/>
              <div class="label">ri-layout-row-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-row-line"/>
              <div class="label">ri-layout-row-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-top-2-fill"/>
              <div class="label">ri-layout-top-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-top-2-line"/>
              <div class="label">ri-layout-top-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-top-fill"/>
              <div class="label">ri-layout-top-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-layout-top-line"/>
              <div class="label">ri-layout-top-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-leaf-fill"/>
              <div class="label">ri-leaf-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-leaf-line"/>
              <div class="label">ri-leaf-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lifebuoy-fill"/>
              <div class="label">ri-lifebuoy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lifebuoy-line"/>
              <div class="label">ri-lifebuoy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lightbulb-fill"/>
              <div class="label">ri-lightbulb-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lightbulb-flash-fill"/>
              <div class="label">ri-lightbulb-flash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lightbulb-flash-line"/>
              <div class="label">ri-lightbulb-flash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lightbulb-line"/>
              <div class="label">ri-lightbulb-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-line-chart-fill"/>
              <div class="label">ri-line-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-line-chart-line"/>
              <div class="label">ri-line-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-line-fill"/>
              <div class="label">ri-line-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-line-height"/>
              <div class="label">ri-line-height</div>
            </div>
            <div class="icon">
               <x-icon name="ri-line-line"/>
              <div class="label">ri-line-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-link-m"/>
              <div class="label">ri-link-m</div>
            </div>
            <div class="icon">
               <x-icon name="ri-link-unlink-m"/>
              <div class="label">ri-link-unlink-m</div>
            </div>
            <div class="icon">
               <x-icon name="ri-link-unlink"/>
              <div class="label">ri-link-unlink</div>
            </div>
            <div class="icon">
               <x-icon name="ri-link"/>
              <div class="label">ri-link</div>
            </div>
            <div class="icon">
               <x-icon name="ri-linkedin-box-fill"/>
              <div class="label">ri-linkedin-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-linkedin-box-line"/>
              <div class="label">ri-linkedin-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-linkedin-fill"/>
              <div class="label">ri-linkedin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-linkedin-line"/>
              <div class="label">ri-linkedin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-links-fill"/>
              <div class="label">ri-links-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-links-line"/>
              <div class="label">ri-links-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-check-2"/>
              <div class="label">ri-list-check-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-check"/>
              <div class="label">ri-list-check</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-ordered"/>
              <div class="label">ri-list-ordered</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-settings-fill"/>
              <div class="label">ri-list-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-settings-line"/>
              <div class="label">ri-list-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-list-unordered"/>
              <div class="label">ri-list-unordered</div>
            </div>
            <div class="icon">
               <x-icon name="ri-live-fill"/>
              <div class="label">ri-live-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-live-line"/>
              <div class="label">ri-live-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-2-fill"/>
              <div class="label">ri-loader-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-2-line"/>
              <div class="label">ri-loader-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-3-fill"/>
              <div class="label">ri-loader-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-3-line"/>
              <div class="label">ri-loader-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-4-fill"/>
              <div class="label">ri-loader-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-4-line"/>
              <div class="label">ri-loader-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-5-fill"/>
              <div class="label">ri-loader-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-5-line"/>
              <div class="label">ri-loader-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-fill"/>
              <div class="label">ri-loader-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-loader-line"/>
              <div class="label">ri-loader-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-2-fill"/>
              <div class="label">ri-lock-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-2-line"/>
              <div class="label">ri-lock-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-fill"/>
              <div class="label">ri-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-line"/>
              <div class="label">ri-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-password-fill"/>
              <div class="label">ri-lock-password-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-password-line"/>
              <div class="label">ri-lock-password-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-unlock-fill"/>
              <div class="label">ri-lock-unlock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lock-unlock-line"/>
              <div class="label">ri-lock-unlock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-login-box-fill"/>
              <div class="label">ri-login-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-login-box-line"/>
              <div class="label">ri-login-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-login-circle-fill"/>
              <div class="label">ri-login-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-login-circle-line"/>
              <div class="label">ri-login-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-box-fill"/>
              <div class="label">ri-logout-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-box-line"/>
              <div class="label">ri-logout-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-box-r-fill"/>
              <div class="label">ri-logout-box-r-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-box-r-line"/>
              <div class="label">ri-logout-box-r-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-circle-fill"/>
              <div class="label">ri-logout-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-circle-line"/>
              <div class="label">ri-logout-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-circle-r-fill"/>
              <div class="label">ri-logout-circle-r-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-logout-circle-r-line"/>
              <div class="label">ri-logout-circle-r-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-luggage-cart-fill"/>
              <div class="label">ri-luggage-cart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-luggage-cart-line"/>
              <div class="label">ri-luggage-cart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-luggage-deposit-fill"/>
              <div class="label">ri-luggage-deposit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-luggage-deposit-line"/>
              <div class="label">ri-luggage-deposit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lungs-fill"/>
              <div class="label">ri-lungs-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-lungs-line"/>
              <div class="label">ri-lungs-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mac-fill"/>
              <div class="label">ri-mac-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mac-line"/>
              <div class="label">ri-mac-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-macbook-fill"/>
              <div class="label">ri-macbook-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-macbook-line"/>
              <div class="label">ri-macbook-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-magic-fill"/>
              <div class="label">ri-magic-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-magic-line"/>
              <div class="label">ri-magic-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-add-fill"/>
              <div class="label">ri-mail-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-add-line"/>
              <div class="label">ri-mail-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-check-fill"/>
              <div class="label">ri-mail-check-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-check-line"/>
              <div class="label">ri-mail-check-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-close-fill"/>
              <div class="label">ri-mail-close-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-close-line"/>
              <div class="label">ri-mail-close-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-download-fill"/>
              <div class="label">ri-mail-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-download-line"/>
              <div class="label">ri-mail-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-fill"/>
              <div class="label">ri-mail-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-forbid-fill"/>
              <div class="label">ri-mail-forbid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-forbid-line"/>
              <div class="label">ri-mail-forbid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-line"/>
              <div class="label">ri-mail-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-lock-fill"/>
              <div class="label">ri-mail-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-lock-line"/>
              <div class="label">ri-mail-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-open-fill"/>
              <div class="label">ri-mail-open-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-open-line"/>
              <div class="label">ri-mail-open-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-send-fill"/>
              <div class="label">ri-mail-send-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-send-line"/>
              <div class="label">ri-mail-send-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-settings-fill"/>
              <div class="label">ri-mail-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-settings-line"/>
              <div class="label">ri-mail-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-star-fill"/>
              <div class="label">ri-mail-star-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-star-line"/>
              <div class="label">ri-mail-star-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-unread-fill"/>
              <div class="label">ri-mail-unread-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-unread-line"/>
              <div class="label">ri-mail-unread-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-volume-fill"/>
              <div class="label">ri-mail-volume-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mail-volume-line"/>
              <div class="label">ri-mail-volume-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-2-fill"/>
              <div class="label">ri-map-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-2-line"/>
              <div class="label">ri-map-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-fill"/>
              <div class="label">ri-map-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-line"/>
              <div class="label">ri-map-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-2-fill"/>
              <div class="label">ri-map-pin-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-2-line"/>
              <div class="label">ri-map-pin-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-3-fill"/>
              <div class="label">ri-map-pin-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-3-line"/>
              <div class="label">ri-map-pin-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-4-fill"/>
              <div class="label">ri-map-pin-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-4-line"/>
              <div class="label">ri-map-pin-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-5-fill"/>
              <div class="label">ri-map-pin-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-5-line"/>
              <div class="label">ri-map-pin-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-add-fill"/>
              <div class="label">ri-map-pin-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-add-line"/>
              <div class="label">ri-map-pin-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-fill"/>
              <div class="label">ri-map-pin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-line"/>
              <div class="label">ri-map-pin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-range-fill"/>
              <div class="label">ri-map-pin-range-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-range-line"/>
              <div class="label">ri-map-pin-range-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-time-fill"/>
              <div class="label">ri-map-pin-time-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-time-line"/>
              <div class="label">ri-map-pin-time-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-user-fill"/>
              <div class="label">ri-map-pin-user-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-map-pin-user-line"/>
              <div class="label">ri-map-pin-user-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mark-pen-fill"/>
              <div class="label">ri-mark-pen-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mark-pen-line"/>
              <div class="label">ri-mark-pen-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-markdown-fill"/>
              <div class="label">ri-markdown-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-markdown-line"/>
              <div class="label">ri-markdown-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-markup-fill"/>
              <div class="label">ri-markup-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-markup-line"/>
              <div class="label">ri-markup-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mastercard-fill"/>
              <div class="label">ri-mastercard-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mastercard-line"/>
              <div class="label">ri-mastercard-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mastodon-fill"/>
              <div class="label">ri-mastodon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mastodon-line"/>
              <div class="label">ri-mastodon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medal-2-fill"/>
              <div class="label">ri-medal-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medal-2-line"/>
              <div class="label">ri-medal-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medal-fill"/>
              <div class="label">ri-medal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medal-line"/>
              <div class="label">ri-medal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medicine-bottle-fill"/>
              <div class="label">ri-medicine-bottle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medicine-bottle-line"/>
              <div class="label">ri-medicine-bottle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medium-fill"/>
              <div class="label">ri-medium-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-medium-line"/>
              <div class="label">ri-medium-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-men-fill"/>
              <div class="label">ri-men-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-men-line"/>
              <div class="label">ri-men-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mental-health-fill"/>
              <div class="label">ri-mental-health-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mental-health-line"/>
              <div class="label">ri-mental-health-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-2-fill"/>
              <div class="label">ri-menu-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-2-line"/>
              <div class="label">ri-menu-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-3-fill"/>
              <div class="label">ri-menu-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-3-line"/>
              <div class="label">ri-menu-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-4-fill"/>
              <div class="label">ri-menu-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-4-line"/>
              <div class="label">ri-menu-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-5-fill"/>
              <div class="label">ri-menu-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-5-line"/>
              <div class="label">ri-menu-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-add-fill"/>
              <div class="label">ri-menu-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-add-line"/>
              <div class="label">ri-menu-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-fill"/>
              <div class="label">ri-menu-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-fold-fill"/>
              <div class="label">ri-menu-fold-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-fold-line"/>
              <div class="label">ri-menu-fold-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-line"/>
              <div class="label">ri-menu-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-unfold-fill"/>
              <div class="label">ri-menu-unfold-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-menu-unfold-line"/>
              <div class="label">ri-menu-unfold-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-merge-cells-horizontal"/>
              <div class="label">ri-merge-cells-horizontal</div>
            </div>
            <div class="icon">
               <x-icon name="ri-merge-cells-vertical"/>
              <div class="label">ri-merge-cells-vertical</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-2-fill"/>
              <div class="label">ri-message-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-2-line"/>
              <div class="label">ri-message-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-3-fill"/>
              <div class="label">ri-message-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-3-line"/>
              <div class="label">ri-message-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-fill"/>
              <div class="label">ri-message-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-message-line"/>
              <div class="label">ri-message-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-messenger-fill"/>
              <div class="label">ri-messenger-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-messenger-line"/>
              <div class="label">ri-messenger-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-meteor-fill"/>
              <div class="label">ri-meteor-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-meteor-line"/>
              <div class="label">ri-meteor-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-2-fill"/>
              <div class="label">ri-mic-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-2-line"/>
              <div class="label">ri-mic-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-fill"/>
              <div class="label">ri-mic-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-line"/>
              <div class="label">ri-mic-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-off-fill"/>
              <div class="label">ri-mic-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mic-off-line"/>
              <div class="label">ri-mic-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mickey-fill"/>
              <div class="label">ri-mickey-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mickey-line"/>
              <div class="label">ri-mickey-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-microscope-fill"/>
              <div class="label">ri-microscope-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-microscope-line"/>
              <div class="label">ri-microscope-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-microsoft-fill"/>
              <div class="label">ri-microsoft-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-microsoft-line"/>
              <div class="label">ri-microsoft-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mind-map"/>
              <div class="label">ri-mind-map</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mini-program-fill"/>
              <div class="label">ri-mini-program-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mini-program-line"/>
              <div class="label">ri-mini-program-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mist-fill"/>
              <div class="label">ri-mist-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mist-line"/>
              <div class="label">ri-mist-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-cny-box-fill"/>
              <div class="label">ri-money-cny-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-cny-box-line"/>
              <div class="label">ri-money-cny-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-cny-circle-fill"/>
              <div class="label">ri-money-cny-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-cny-circle-line"/>
              <div class="label">ri-money-cny-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-dollar-box-fill"/>
              <div class="label">ri-money-dollar-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-dollar-box-line"/>
              <div class="label">ri-money-dollar-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-dollar-circle-fill"/>
              <div class="label">ri-money-dollar-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-dollar-circle-line"/>
              <div class="label">ri-money-dollar-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-euro-box-fill"/>
              <div class="label">ri-money-euro-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-euro-box-line"/>
              <div class="label">ri-money-euro-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-euro-circle-fill"/>
              <div class="label">ri-money-euro-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-euro-circle-line"/>
              <div class="label">ri-money-euro-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-pound-box-fill"/>
              <div class="label">ri-money-pound-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-pound-box-line"/>
              <div class="label">ri-money-pound-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-pound-circle-fill"/>
              <div class="label">ri-money-pound-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-money-pound-circle-line"/>
              <div class="label">ri-money-pound-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-clear-fill"/>
              <div class="label">ri-moon-clear-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-clear-line"/>
              <div class="label">ri-moon-clear-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-cloudy-fill"/>
              <div class="label">ri-moon-cloudy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-cloudy-line"/>
              <div class="label">ri-moon-cloudy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-fill"/>
              <div class="label">ri-moon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-foggy-fill"/>
              <div class="label">ri-moon-foggy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-foggy-line"/>
              <div class="label">ri-moon-foggy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-moon-line"/>
              <div class="label">ri-moon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-more-2-fill"/>
              <div class="label">ri-more-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-more-2-line"/>
              <div class="label">ri-more-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-more-fill"/>
              <div class="label">ri-more-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-more-line"/>
              <div class="label">ri-more-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-motorbike-fill"/>
              <div class="label">ri-motorbike-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-motorbike-line"/>
              <div class="label">ri-motorbike-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mouse-fill"/>
              <div class="label">ri-mouse-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mouse-line"/>
              <div class="label">ri-mouse-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-movie-2-fill"/>
              <div class="label">ri-movie-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-movie-2-line"/>
              <div class="label">ri-movie-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-movie-fill"/>
              <div class="label">ri-movie-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-movie-line"/>
              <div class="label">ri-movie-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-music-2-fill"/>
              <div class="label">ri-music-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-music-2-line"/>
              <div class="label">ri-music-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-music-fill"/>
              <div class="label">ri-music-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-music-line"/>
              <div class="label">ri-music-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mv-fill"/>
              <div class="label">ri-mv-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-mv-line"/>
              <div class="label">ri-mv-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-navigation-fill"/>
              <div class="label">ri-navigation-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-navigation-line"/>
              <div class="label">ri-navigation-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-netease-cloud-music-fill"/>
              <div class="label">ri-netease-cloud-music-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-netease-cloud-music-line"/>
              <div class="label">ri-netease-cloud-music-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-netflix-fill"/>
              <div class="label">ri-netflix-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-netflix-line"/>
              <div class="label">ri-netflix-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-newspaper-fill"/>
              <div class="label">ri-newspaper-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-newspaper-line"/>
              <div class="label">ri-newspaper-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-node-tree"/>
              <div class="label">ri-node-tree</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-2-fill"/>
              <div class="label">ri-notification-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-2-line"/>
              <div class="label">ri-notification-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-3-fill"/>
              <div class="label">ri-notification-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-3-line"/>
              <div class="label">ri-notification-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-4-fill"/>
              <div class="label">ri-notification-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-4-line"/>
              <div class="label">ri-notification-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-badge-fill"/>
              <div class="label">ri-notification-badge-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-badge-line"/>
              <div class="label">ri-notification-badge-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-fill"/>
              <div class="label">ri-notification-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-line"/>
              <div class="label">ri-notification-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-off-fill"/>
              <div class="label">ri-notification-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-notification-off-line"/>
              <div class="label">ri-notification-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-npmjs-fill"/>
              <div class="label">ri-npmjs-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-npmjs-line"/>
              <div class="label">ri-npmjs-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-0"/>
              <div class="label">ri-number-0</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-1"/>
              <div class="label">ri-number-1</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-2"/>
              <div class="label">ri-number-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-3"/>
              <div class="label">ri-number-3</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-4"/>
              <div class="label">ri-number-4</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-5"/>
              <div class="label">ri-number-5</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-6"/>
              <div class="label">ri-number-6</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-7"/>
              <div class="label">ri-number-7</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-8"/>
              <div class="label">ri-number-8</div>
            </div>
            <div class="icon">
               <x-icon name="ri-number-9"/>
              <div class="label">ri-number-9</div>
            </div>
            <div class="icon">
               <x-icon name="ri-numbers-fill"/>
              <div class="label">ri-numbers-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-numbers-line"/>
              <div class="label">ri-numbers-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-nurse-fill"/>
              <div class="label">ri-nurse-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-nurse-line"/>
              <div class="label">ri-nurse-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-oil-fill"/>
              <div class="label">ri-oil-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-oil-line"/>
              <div class="label">ri-oil-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-omega"/>
              <div class="label">ri-omega</div>
            </div>
            <div class="icon">
               <x-icon name="ri-open-arm-fill"/>
              <div class="label">ri-open-arm-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-open-arm-line"/>
              <div class="label">ri-open-arm-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-open-source-fill"/>
              <div class="label">ri-open-source-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-open-source-line"/>
              <div class="label">ri-open-source-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-opera-fill"/>
              <div class="label">ri-opera-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-opera-line"/>
              <div class="label">ri-opera-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-order-play-fill"/>
              <div class="label">ri-order-play-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-order-play-line"/>
              <div class="label">ri-order-play-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-organization-chart"/>
              <div class="label">ri-organization-chart</div>
            </div>
            <div class="icon">
               <x-icon name="ri-outlet-2-fill"/>
              <div class="label">ri-outlet-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-outlet-2-line"/>
              <div class="label">ri-outlet-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-outlet-fill"/>
              <div class="label">ri-outlet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-outlet-line"/>
              <div class="label">ri-outlet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-page-separator"/>
              <div class="label">ri-page-separator</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pages-fill"/>
              <div class="label">ri-pages-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pages-line"/>
              <div class="label">ri-pages-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paint-brush-fill"/>
              <div class="label">ri-paint-brush-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paint-brush-line"/>
              <div class="label">ri-paint-brush-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paint-fill"/>
              <div class="label">ri-paint-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paint-line"/>
              <div class="label">ri-paint-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-palette-fill"/>
              <div class="label">ri-palette-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-palette-line"/>
              <div class="label">ri-palette-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pantone-fill"/>
              <div class="label">ri-pantone-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pantone-line"/>
              <div class="label">ri-pantone-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paragraph"/>
              <div class="label">ri-paragraph</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parent-fill"/>
              <div class="label">ri-parent-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parent-line"/>
              <div class="label">ri-parent-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parentheses-fill"/>
              <div class="label">ri-parentheses-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parentheses-line"/>
              <div class="label">ri-parentheses-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parking-box-fill"/>
              <div class="label">ri-parking-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parking-box-line"/>
              <div class="label">ri-parking-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parking-fill"/>
              <div class="label">ri-parking-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-parking-line"/>
              <div class="label">ri-parking-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-passport-fill"/>
              <div class="label">ri-passport-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-passport-line"/>
              <div class="label">ri-passport-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-patreon-fill"/>
              <div class="label">ri-patreon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-patreon-line"/>
              <div class="label">ri-patreon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-circle-fill"/>
              <div class="label">ri-pause-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-circle-line"/>
              <div class="label">ri-pause-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-fill"/>
              <div class="label">ri-pause-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-line"/>
              <div class="label">ri-pause-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-mini-fill"/>
              <div class="label">ri-pause-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pause-mini-line"/>
              <div class="label">ri-pause-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paypal-fill"/>
              <div class="label">ri-paypal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-paypal-line"/>
              <div class="label">ri-paypal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pen-nib-fill"/>
              <div class="label">ri-pen-nib-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pen-nib-line"/>
              <div class="label">ri-pen-nib-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-fill"/>
              <div class="label">ri-pencil-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-line"/>
              <div class="label">ri-pencil-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-ruler-2-fill"/>
              <div class="label">ri-pencil-ruler-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-ruler-2-line"/>
              <div class="label">ri-pencil-ruler-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-ruler-fill"/>
              <div class="label">ri-pencil-ruler-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pencil-ruler-line"/>
              <div class="label">ri-pencil-ruler-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-percent-fill"/>
              <div class="label">ri-percent-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-percent-line"/>
              <div class="label">ri-percent-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-camera-fill"/>
              <div class="label">ri-phone-camera-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-camera-line"/>
              <div class="label">ri-phone-camera-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-fill"/>
              <div class="label">ri-phone-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-find-fill"/>
              <div class="label">ri-phone-find-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-find-line"/>
              <div class="label">ri-phone-find-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-line"/>
              <div class="label">ri-phone-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-lock-fill"/>
              <div class="label">ri-phone-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-phone-lock-line"/>
              <div class="label">ri-phone-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-2-fill"/>
              <div class="label">ri-picture-in-picture-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-2-line"/>
              <div class="label">ri-picture-in-picture-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-exit-fill"/>
              <div class="label">ri-picture-in-picture-exit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-exit-line"/>
              <div class="label">ri-picture-in-picture-exit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-fill"/>
              <div class="label">ri-picture-in-picture-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-picture-in-picture-line"/>
              <div class="label">ri-picture-in-picture-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-2-fill"/>
              <div class="label">ri-pie-chart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-2-line"/>
              <div class="label">ri-pie-chart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-box-fill"/>
              <div class="label">ri-pie-chart-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-box-line"/>
              <div class="label">ri-pie-chart-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-fill"/>
              <div class="label">ri-pie-chart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pie-chart-line"/>
              <div class="label">ri-pie-chart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pin-distance-fill"/>
              <div class="label">ri-pin-distance-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pin-distance-line"/>
              <div class="label">ri-pin-distance-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ping-pong-fill"/>
              <div class="label">ri-ping-pong-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ping-pong-line"/>
              <div class="label">ri-ping-pong-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pinterest-fill"/>
              <div class="label">ri-pinterest-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pinterest-line"/>
              <div class="label">ri-pinterest-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pinyin-input"/>
              <div class="label">ri-pinyin-input</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pixelfed-fill"/>
              <div class="label">ri-pixelfed-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pixelfed-line"/>
              <div class="label">ri-pixelfed-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plane-fill"/>
              <div class="label">ri-plane-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plane-line"/>
              <div class="label">ri-plane-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plant-fill"/>
              <div class="label">ri-plant-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plant-line"/>
              <div class="label">ri-plant-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-circle-fill"/>
              <div class="label">ri-play-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-circle-line"/>
              <div class="label">ri-play-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-fill"/>
              <div class="label">ri-play-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-line"/>
              <div class="label">ri-play-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-2-fill"/>
              <div class="label">ri-play-list-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-2-line"/>
              <div class="label">ri-play-list-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-add-fill"/>
              <div class="label">ri-play-list-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-add-line"/>
              <div class="label">ri-play-list-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-fill"/>
              <div class="label">ri-play-list-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-list-line"/>
              <div class="label">ri-play-list-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-mini-fill"/>
              <div class="label">ri-play-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-play-mini-line"/>
              <div class="label">ri-play-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-playstation-fill"/>
              <div class="label">ri-playstation-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-playstation-line"/>
              <div class="label">ri-playstation-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plug-2-fill"/>
              <div class="label">ri-plug-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plug-2-line"/>
              <div class="label">ri-plug-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plug-fill"/>
              <div class="label">ri-plug-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-plug-line"/>
              <div class="label">ri-plug-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-polaroid-2-fill"/>
              <div class="label">ri-polaroid-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-polaroid-2-line"/>
              <div class="label">ri-polaroid-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-polaroid-fill"/>
              <div class="label">ri-polaroid-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-polaroid-line"/>
              <div class="label">ri-polaroid-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-police-car-fill"/>
              <div class="label">ri-police-car-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-police-car-line"/>
              <div class="label">ri-police-car-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-2-fill"/>
              <div class="label">ri-price-tag-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-2-line"/>
              <div class="label">ri-price-tag-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-3-fill"/>
              <div class="label">ri-price-tag-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-3-line"/>
              <div class="label">ri-price-tag-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-fill"/>
              <div class="label">ri-price-tag-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-price-tag-line"/>
              <div class="label">ri-price-tag-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-printer-cloud-fill"/>
              <div class="label">ri-printer-cloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-printer-cloud-line"/>
              <div class="label">ri-printer-cloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-printer-fill"/>
              <div class="label">ri-printer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-printer-line"/>
              <div class="label">ri-printer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-product-hunt-fill"/>
              <div class="label">ri-product-hunt-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-product-hunt-line"/>
              <div class="label">ri-product-hunt-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-profile-fill"/>
              <div class="label">ri-profile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-profile-line"/>
              <div class="label">ri-profile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-projector-2-fill"/>
              <div class="label">ri-projector-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-projector-2-line"/>
              <div class="label">ri-projector-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-projector-fill"/>
              <div class="label">ri-projector-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-projector-line"/>
              <div class="label">ri-projector-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-psychotherapy-fill"/>
              <div class="label">ri-psychotherapy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-psychotherapy-line"/>
              <div class="label">ri-psychotherapy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pulse-fill"/>
              <div class="label">ri-pulse-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pulse-line"/>
              <div class="label">ri-pulse-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pushpin-2-fill"/>
              <div class="label">ri-pushpin-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pushpin-2-line"/>
              <div class="label">ri-pushpin-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pushpin-fill"/>
              <div class="label">ri-pushpin-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-pushpin-line"/>
              <div class="label">ri-pushpin-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qq-fill"/>
              <div class="label">ri-qq-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qq-line"/>
              <div class="label">ri-qq-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-code-fill"/>
              <div class="label">ri-qr-code-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-code-line"/>
              <div class="label">ri-qr-code-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-scan-2-fill"/>
              <div class="label">ri-qr-scan-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-scan-2-line"/>
              <div class="label">ri-qr-scan-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-scan-fill"/>
              <div class="label">ri-qr-scan-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-qr-scan-line"/>
              <div class="label">ri-qr-scan-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-question-answer-fill"/>
              <div class="label">ri-question-answer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-question-answer-line"/>
              <div class="label">ri-question-answer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-question-fill"/>
              <div class="label">ri-question-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-question-line"/>
              <div class="label">ri-question-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-question-mark"/>
              <div class="label">ri-question-mark</div>
            </div>
            <div class="icon">
               <x-icon name="ri-questionnaire-fill"/>
              <div class="label">ri-questionnaire-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-questionnaire-line"/>
              <div class="label">ri-questionnaire-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-quill-pen-fill"/>
              <div class="label">ri-quill-pen-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-quill-pen-line"/>
              <div class="label">ri-quill-pen-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radar-fill"/>
              <div class="label">ri-radar-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radar-line"/>
              <div class="label">ri-radar-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-2-fill"/>
              <div class="label">ri-radio-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-2-line"/>
              <div class="label">ri-radio-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-button-fill"/>
              <div class="label">ri-radio-button-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-button-line"/>
              <div class="label">ri-radio-button-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-fill"/>
              <div class="label">ri-radio-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-radio-line"/>
              <div class="label">ri-radio-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rainbow-fill"/>
              <div class="label">ri-rainbow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rainbow-line"/>
              <div class="label">ri-rainbow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rainy-fill"/>
              <div class="label">ri-rainy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rainy-line"/>
              <div class="label">ri-rainy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reactjs-fill"/>
              <div class="label">ri-reactjs-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reactjs-line"/>
              <div class="label">ri-reactjs-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-record-circle-fill"/>
              <div class="label">ri-record-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-record-circle-line"/>
              <div class="label">ri-record-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-record-mail-fill"/>
              <div class="label">ri-record-mail-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-record-mail-line"/>
              <div class="label">ri-record-mail-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-recycle-fill"/>
              <div class="label">ri-recycle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-recycle-line"/>
              <div class="label">ri-recycle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-red-packet-fill"/>
              <div class="label">ri-red-packet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-red-packet-line"/>
              <div class="label">ri-red-packet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reddit-fill"/>
              <div class="label">ri-reddit-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reddit-line"/>
              <div class="label">ri-reddit-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refresh-fill"/>
              <div class="label">ri-refresh-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refresh-line"/>
              <div class="label">ri-refresh-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refund-2-fill"/>
              <div class="label">ri-refund-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refund-2-line"/>
              <div class="label">ri-refund-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refund-fill"/>
              <div class="label">ri-refund-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-refund-line"/>
              <div class="label">ri-refund-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-registered-fill"/>
              <div class="label">ri-registered-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-registered-line"/>
              <div class="label">ri-registered-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remixicon-fill"/>
              <div class="label">ri-remixicon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remixicon-line"/>
              <div class="label">ri-remixicon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remote-control-2-fill"/>
              <div class="label">ri-remote-control-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remote-control-2-line"/>
              <div class="label">ri-remote-control-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remote-control-fill"/>
              <div class="label">ri-remote-control-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-remote-control-line"/>
              <div class="label">ri-remote-control-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-2-fill"/>
              <div class="label">ri-repeat-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-2-line"/>
              <div class="label">ri-repeat-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-fill"/>
              <div class="label">ri-repeat-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-line"/>
              <div class="label">ri-repeat-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-one-fill"/>
              <div class="label">ri-repeat-one-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-repeat-one-line"/>
              <div class="label">ri-repeat-one-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reply-all-fill"/>
              <div class="label">ri-reply-all-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reply-all-line"/>
              <div class="label">ri-reply-all-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reply-fill"/>
              <div class="label">ri-reply-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reply-line"/>
              <div class="label">ri-reply-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reserved-fill"/>
              <div class="label">ri-reserved-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-reserved-line"/>
              <div class="label">ri-reserved-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rest-time-fill"/>
              <div class="label">ri-rest-time-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rest-time-line"/>
              <div class="label">ri-rest-time-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restart-fill"/>
              <div class="label">ri-restart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restart-line"/>
              <div class="label">ri-restart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restaurant-2-fill"/>
              <div class="label">ri-restaurant-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restaurant-2-line"/>
              <div class="label">ri-restaurant-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restaurant-fill"/>
              <div class="label">ri-restaurant-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-restaurant-line"/>
              <div class="label">ri-restaurant-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rewind-fill"/>
              <div class="label">ri-rewind-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rewind-line"/>
              <div class="label">ri-rewind-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rewind-mini-fill"/>
              <div class="label">ri-rewind-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rewind-mini-line"/>
              <div class="label">ri-rewind-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rhythm-fill"/>
              <div class="label">ri-rhythm-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rhythm-line"/>
              <div class="label">ri-rhythm-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-riding-fill"/>
              <div class="label">ri-riding-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-riding-line"/>
              <div class="label">ri-riding-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-road-map-fill"/>
              <div class="label">ri-road-map-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-road-map-line"/>
              <div class="label">ri-road-map-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-roadster-fill"/>
              <div class="label">ri-roadster-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-roadster-line"/>
              <div class="label">ri-roadster-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-robot-fill"/>
              <div class="label">ri-robot-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-robot-line"/>
              <div class="label">ri-robot-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rocket-2-fill"/>
              <div class="label">ri-rocket-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rocket-2-line"/>
              <div class="label">ri-rocket-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rocket-fill"/>
              <div class="label">ri-rocket-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rocket-line"/>
              <div class="label">ri-rocket-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rotate-lock-fill"/>
              <div class="label">ri-rotate-lock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rotate-lock-line"/>
              <div class="label">ri-rotate-lock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rounded-corner"/>
              <div class="label">ri-rounded-corner</div>
            </div>
            <div class="icon">
               <x-icon name="ri-route-fill"/>
              <div class="label">ri-route-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-route-line"/>
              <div class="label">ri-route-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-router-fill"/>
              <div class="label">ri-router-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-router-line"/>
              <div class="label">ri-router-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rss-fill"/>
              <div class="label">ri-rss-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-rss-line"/>
              <div class="label">ri-rss-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ruler-2-fill"/>
              <div class="label">ri-ruler-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ruler-2-line"/>
              <div class="label">ri-ruler-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ruler-fill"/>
              <div class="label">ri-ruler-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ruler-line"/>
              <div class="label">ri-ruler-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-run-fill"/>
              <div class="label">ri-run-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-run-line"/>
              <div class="label">ri-run-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safari-fill"/>
              <div class="label">ri-safari-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safari-line"/>
              <div class="label">ri-safari-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safe-2-fill"/>
              <div class="label">ri-safe-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safe-2-line"/>
              <div class="label">ri-safe-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safe-fill"/>
              <div class="label">ri-safe-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-safe-line"/>
              <div class="label">ri-safe-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sailboat-fill"/>
              <div class="label">ri-sailboat-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sailboat-line"/>
              <div class="label">ri-sailboat-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-2-fill"/>
              <div class="label">ri-save-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-2-line"/>
              <div class="label">ri-save-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-3-fill"/>
              <div class="label">ri-save-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-3-line"/>
              <div class="label">ri-save-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-fill"/>
              <div class="label">ri-save-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-save-line"/>
              <div class="label">ri-save-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-2-fill"/>
              <div class="label">ri-scales-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-2-line"/>
              <div class="label">ri-scales-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-3-fill"/>
              <div class="label">ri-scales-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-3-line"/>
              <div class="label">ri-scales-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-fill"/>
              <div class="label">ri-scales-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scales-line"/>
              <div class="label">ri-scales-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scan-2-fill"/>
              <div class="label">ri-scan-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scan-2-line"/>
              <div class="label">ri-scan-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scan-fill"/>
              <div class="label">ri-scan-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scan-line"/>
              <div class="label">ri-scan-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-2-fill"/>
              <div class="label">ri-scissors-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-2-line"/>
              <div class="label">ri-scissors-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-cut-fill"/>
              <div class="label">ri-scissors-cut-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-cut-line"/>
              <div class="label">ri-scissors-cut-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-fill"/>
              <div class="label">ri-scissors-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-scissors-line"/>
              <div class="label">ri-scissors-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-screenshot-2-fill"/>
              <div class="label">ri-screenshot-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-screenshot-2-line"/>
              <div class="label">ri-screenshot-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-screenshot-fill"/>
              <div class="label">ri-screenshot-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-screenshot-line"/>
              <div class="label">ri-screenshot-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sd-card-fill"/>
              <div class="label">ri-sd-card-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sd-card-line"/>
              <div class="label">ri-sd-card-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sd-card-mini-fill"/>
              <div class="label">ri-sd-card-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sd-card-mini-line"/>
              <div class="label">ri-sd-card-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-2-fill"/>
              <div class="label">ri-search-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-2-line"/>
              <div class="label">ri-search-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-eye-fill"/>
              <div class="label">ri-search-eye-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-eye-line"/>
              <div class="label">ri-search-eye-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-fill"/>
              <div class="label">ri-search-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-search-line"/>
              <div class="label">ri-search-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-secure-payment-fill"/>
              <div class="label">ri-secure-payment-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-secure-payment-line"/>
              <div class="label">ri-secure-payment-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-seedling-fill"/>
              <div class="label">ri-seedling-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-seedling-line"/>
              <div class="label">ri-seedling-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-backward"/>
              <div class="label">ri-send-backward</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-plane-2-fill"/>
              <div class="label">ri-send-plane-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-plane-2-line"/>
              <div class="label">ri-send-plane-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-plane-fill"/>
              <div class="label">ri-send-plane-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-plane-line"/>
              <div class="label">ri-send-plane-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-send-to-back"/>
              <div class="label">ri-send-to-back</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sensor-fill"/>
              <div class="label">ri-sensor-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sensor-line"/>
              <div class="label">ri-sensor-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-separator"/>
              <div class="label">ri-separator</div>
            </div>
            <div class="icon">
               <x-icon name="ri-server-fill"/>
              <div class="label">ri-server-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-server-line"/>
              <div class="label">ri-server-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-service-fill"/>
              <div class="label">ri-service-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-service-line"/>
              <div class="label">ri-service-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-2-fill"/>
              <div class="label">ri-settings-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-2-line"/>
              <div class="label">ri-settings-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-3-fill"/>
              <div class="label">ri-settings-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-3-line"/>
              <div class="label">ri-settings-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-4-fill"/>
              <div class="label">ri-settings-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-4-line"/>
              <div class="label">ri-settings-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-5-fill"/>
              <div class="label">ri-settings-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-5-line"/>
              <div class="label">ri-settings-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-6-fill"/>
              <div class="label">ri-settings-6-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-6-line"/>
              <div class="label">ri-settings-6-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-fill"/>
              <div class="label">ri-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-settings-line"/>
              <div class="label">ri-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shape-2-fill"/>
              <div class="label">ri-shape-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shape-2-line"/>
              <div class="label">ri-shape-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shape-fill"/>
              <div class="label">ri-shape-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shape-line"/>
              <div class="label">ri-shape-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-box-fill"/>
              <div class="label">ri-share-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-box-line"/>
              <div class="label">ri-share-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-circle-fill"/>
              <div class="label">ri-share-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-circle-line"/>
              <div class="label">ri-share-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-fill"/>
              <div class="label">ri-share-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-2-fill"/>
              <div class="label">ri-share-forward-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-2-line"/>
              <div class="label">ri-share-forward-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-box-fill"/>
              <div class="label">ri-share-forward-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-box-line"/>
              <div class="label">ri-share-forward-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-fill"/>
              <div class="label">ri-share-forward-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-forward-line"/>
              <div class="label">ri-share-forward-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-share-line"/>
              <div class="label">ri-share-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-check-fill"/>
              <div class="label">ri-shield-check-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-check-line"/>
              <div class="label">ri-shield-check-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-cross-fill"/>
              <div class="label">ri-shield-cross-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-cross-line"/>
              <div class="label">ri-shield-cross-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-fill"/>
              <div class="label">ri-shield-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-flash-fill"/>
              <div class="label">ri-shield-flash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-flash-line"/>
              <div class="label">ri-shield-flash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-keyhole-fill"/>
              <div class="label">ri-shield-keyhole-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-keyhole-line"/>
              <div class="label">ri-shield-keyhole-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-line"/>
              <div class="label">ri-shield-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-star-fill"/>
              <div class="label">ri-shield-star-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-star-line"/>
              <div class="label">ri-shield-star-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-user-fill"/>
              <div class="label">ri-shield-user-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shield-user-line"/>
              <div class="label">ri-shield-user-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ship-2-fill"/>
              <div class="label">ri-ship-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ship-2-line"/>
              <div class="label">ri-ship-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ship-fill"/>
              <div class="label">ri-ship-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ship-line"/>
              <div class="label">ri-ship-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shirt-fill"/>
              <div class="label">ri-shirt-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shirt-line"/>
              <div class="label">ri-shirt-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-2-fill"/>
              <div class="label">ri-shopping-bag-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-2-line"/>
              <div class="label">ri-shopping-bag-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-3-fill"/>
              <div class="label">ri-shopping-bag-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-3-line"/>
              <div class="label">ri-shopping-bag-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-fill"/>
              <div class="label">ri-shopping-bag-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-bag-line"/>
              <div class="label">ri-shopping-bag-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-basket-2-fill"/>
              <div class="label">ri-shopping-basket-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-basket-2-line"/>
              <div class="label">ri-shopping-basket-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-basket-fill"/>
              <div class="label">ri-shopping-basket-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-basket-line"/>
              <div class="label">ri-shopping-basket-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-cart-2-fill"/>
              <div class="label">ri-shopping-cart-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-cart-2-line"/>
              <div class="label">ri-shopping-cart-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-cart-fill"/>
              <div class="label">ri-shopping-cart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shopping-cart-line"/>
              <div class="label">ri-shopping-cart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-showers-fill"/>
              <div class="label">ri-showers-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-showers-line"/>
              <div class="label">ri-showers-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shuffle-fill"/>
              <div class="label">ri-shuffle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shuffle-line"/>
              <div class="label">ri-shuffle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shut-down-fill"/>
              <div class="label">ri-shut-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-shut-down-line"/>
              <div class="label">ri-shut-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-side-bar-fill"/>
              <div class="label">ri-side-bar-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-side-bar-line"/>
              <div class="label">ri-side-bar-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-tower-fill"/>
              <div class="label">ri-signal-tower-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-tower-line"/>
              <div class="label">ri-signal-tower-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-1-fill"/>
              <div class="label">ri-signal-wifi-1-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-1-line"/>
              <div class="label">ri-signal-wifi-1-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-2-fill"/>
              <div class="label">ri-signal-wifi-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-2-line"/>
              <div class="label">ri-signal-wifi-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-3-fill"/>
              <div class="label">ri-signal-wifi-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-3-line"/>
              <div class="label">ri-signal-wifi-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-error-fill"/>
              <div class="label">ri-signal-wifi-error-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-error-line"/>
              <div class="label">ri-signal-wifi-error-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-fill"/>
              <div class="label">ri-signal-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-line"/>
              <div class="label">ri-signal-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-off-fill"/>
              <div class="label">ri-signal-wifi-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-signal-wifi-off-line"/>
              <div class="label">ri-signal-wifi-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sim-card-2-fill"/>
              <div class="label">ri-sim-card-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sim-card-2-line"/>
              <div class="label">ri-sim-card-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sim-card-fill"/>
              <div class="label">ri-sim-card-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sim-card-line"/>
              <div class="label">ri-sim-card-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-single-quotes-l"/>
              <div class="label">ri-single-quotes-l</div>
            </div>
            <div class="icon">
               <x-icon name="ri-single-quotes-r"/>
              <div class="label">ri-single-quotes-r</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sip-fill"/>
              <div class="label">ri-sip-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sip-line"/>
              <div class="label">ri-sip-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-back-fill"/>
              <div class="label">ri-skip-back-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-back-line"/>
              <div class="label">ri-skip-back-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-back-mini-fill"/>
              <div class="label">ri-skip-back-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-back-mini-line"/>
              <div class="label">ri-skip-back-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-forward-fill"/>
              <div class="label">ri-skip-forward-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-forward-line"/>
              <div class="label">ri-skip-forward-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-forward-mini-fill"/>
              <div class="label">ri-skip-forward-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skip-forward-mini-line"/>
              <div class="label">ri-skip-forward-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skull-2-fill"/>
              <div class="label">ri-skull-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skull-2-line"/>
              <div class="label">ri-skull-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skull-fill"/>
              <div class="label">ri-skull-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skull-line"/>
              <div class="label">ri-skull-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skype-fill"/>
              <div class="label">ri-skype-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-skype-line"/>
              <div class="label">ri-skype-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slack-fill"/>
              <div class="label">ri-slack-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slack-line"/>
              <div class="label">ri-slack-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slice-fill"/>
              <div class="label">ri-slice-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slice-line"/>
              <div class="label">ri-slice-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-2-fill"/>
              <div class="label">ri-slideshow-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-2-line"/>
              <div class="label">ri-slideshow-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-3-fill"/>
              <div class="label">ri-slideshow-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-3-line"/>
              <div class="label">ri-slideshow-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-4-fill"/>
              <div class="label">ri-slideshow-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-4-line"/>
              <div class="label">ri-slideshow-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-fill"/>
              <div class="label">ri-slideshow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-slideshow-line"/>
              <div class="label">ri-slideshow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-smartphone-fill"/>
              <div class="label">ri-smartphone-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-smartphone-line"/>
              <div class="label">ri-smartphone-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-snapchat-fill"/>
              <div class="label">ri-snapchat-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-snapchat-line"/>
              <div class="label">ri-snapchat-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-snowy-fill"/>
              <div class="label">ri-snowy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-snowy-line"/>
              <div class="label">ri-snowy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sort-asc"/>
              <div class="label">ri-sort-asc</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sort-desc"/>
              <div class="label">ri-sort-desc</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sound-module-fill"/>
              <div class="label">ri-sound-module-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sound-module-line"/>
              <div class="label">ri-sound-module-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-soundcloud-fill"/>
              <div class="label">ri-soundcloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-soundcloud-line"/>
              <div class="label">ri-soundcloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-space-ship-fill"/>
              <div class="label">ri-space-ship-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-space-ship-line"/>
              <div class="label">ri-space-ship-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-space"/>
              <div class="label">ri-space</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-2-fill"/>
              <div class="label">ri-spam-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-2-line"/>
              <div class="label">ri-spam-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-3-fill"/>
              <div class="label">ri-spam-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-3-line"/>
              <div class="label">ri-spam-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-fill"/>
              <div class="label">ri-spam-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spam-line"/>
              <div class="label">ri-spam-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-2-fill"/>
              <div class="label">ri-speaker-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-2-line"/>
              <div class="label">ri-speaker-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-3-fill"/>
              <div class="label">ri-speaker-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-3-line"/>
              <div class="label">ri-speaker-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-fill"/>
              <div class="label">ri-speaker-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speaker-line"/>
              <div class="label">ri-speaker-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spectrum-fill"/>
              <div class="label">ri-spectrum-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spectrum-line"/>
              <div class="label">ri-spectrum-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speed-fill"/>
              <div class="label">ri-speed-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speed-line"/>
              <div class="label">ri-speed-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speed-mini-fill"/>
              <div class="label">ri-speed-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-speed-mini-line"/>
              <div class="label">ri-speed-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-split-cells-horizontal"/>
              <div class="label">ri-split-cells-horizontal</div>
            </div>
            <div class="icon">
               <x-icon name="ri-split-cells-vertical"/>
              <div class="label">ri-split-cells-vertical</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spotify-fill"/>
              <div class="label">ri-spotify-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spotify-line"/>
              <div class="label">ri-spotify-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spy-fill"/>
              <div class="label">ri-spy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-spy-line"/>
              <div class="label">ri-spy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stack-fill"/>
              <div class="label">ri-stack-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stack-line"/>
              <div class="label">ri-stack-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stack-overflow-fill"/>
              <div class="label">ri-stack-overflow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stack-overflow-line"/>
              <div class="label">ri-stack-overflow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stackshare-fill"/>
              <div class="label">ri-stackshare-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stackshare-line"/>
              <div class="label">ri-stackshare-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-fill"/>
              <div class="label">ri-star-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-half-fill"/>
              <div class="label">ri-star-half-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-half-line"/>
              <div class="label">ri-star-half-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-half-s-fill"/>
              <div class="label">ri-star-half-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-half-s-line"/>
              <div class="label">ri-star-half-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-line"/>
              <div class="label">ri-star-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-s-fill"/>
              <div class="label">ri-star-s-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-s-line"/>
              <div class="label">ri-star-s-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-smile-fill"/>
              <div class="label">ri-star-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-star-smile-line"/>
              <div class="label">ri-star-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steam-fill"/>
              <div class="label">ri-steam-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steam-line"/>
              <div class="label">ri-steam-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steering-2-fill"/>
              <div class="label">ri-steering-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steering-2-line"/>
              <div class="label">ri-steering-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steering-fill"/>
              <div class="label">ri-steering-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-steering-line"/>
              <div class="label">ri-steering-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stethoscope-fill"/>
              <div class="label">ri-stethoscope-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stethoscope-line"/>
              <div class="label">ri-stethoscope-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sticky-note-2-fill"/>
              <div class="label">ri-sticky-note-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sticky-note-2-line"/>
              <div class="label">ri-sticky-note-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sticky-note-fill"/>
              <div class="label">ri-sticky-note-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sticky-note-line"/>
              <div class="label">ri-sticky-note-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stock-fill"/>
              <div class="label">ri-stock-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stock-line"/>
              <div class="label">ri-stock-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-circle-fill"/>
              <div class="label">ri-stop-circle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-circle-line"/>
              <div class="label">ri-stop-circle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-fill"/>
              <div class="label">ri-stop-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-line"/>
              <div class="label">ri-stop-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-mini-fill"/>
              <div class="label">ri-stop-mini-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-stop-mini-line"/>
              <div class="label">ri-stop-mini-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-2-fill"/>
              <div class="label">ri-store-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-2-line"/>
              <div class="label">ri-store-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-3-fill"/>
              <div class="label">ri-store-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-3-line"/>
              <div class="label">ri-store-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-fill"/>
              <div class="label">ri-store-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-store-line"/>
              <div class="label">ri-store-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-strikethrough-2"/>
              <div class="label">ri-strikethrough-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-strikethrough"/>
              <div class="label">ri-strikethrough</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subscript-2"/>
              <div class="label">ri-subscript-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subscript"/>
              <div class="label">ri-subscript</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subtract-fill"/>
              <div class="label">ri-subtract-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subtract-line"/>
              <div class="label">ri-subtract-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subway-fill"/>
              <div class="label">ri-subway-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subway-line"/>
              <div class="label">ri-subway-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subway-wifi-fill"/>
              <div class="label">ri-subway-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-subway-wifi-line"/>
              <div class="label">ri-subway-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-2-fill"/>
              <div class="label">ri-suitcase-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-2-line"/>
              <div class="label">ri-suitcase-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-3-fill"/>
              <div class="label">ri-suitcase-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-3-line"/>
              <div class="label">ri-suitcase-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-fill"/>
              <div class="label">ri-suitcase-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-suitcase-line"/>
              <div class="label">ri-suitcase-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-cloudy-fill"/>
              <div class="label">ri-sun-cloudy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-cloudy-line"/>
              <div class="label">ri-sun-cloudy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-fill"/>
              <div class="label">ri-sun-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-foggy-fill"/>
              <div class="label">ri-sun-foggy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-foggy-line"/>
              <div class="label">ri-sun-foggy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sun-line"/>
              <div class="label">ri-sun-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-superscript-2"/>
              <div class="label">ri-superscript-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-superscript"/>
              <div class="label">ri-superscript</div>
            </div>
            <div class="icon">
               <x-icon name="ri-surgical-mask-fill"/>
              <div class="label">ri-surgical-mask-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-surgical-mask-line"/>
              <div class="label">ri-surgical-mask-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-surround-sound-fill"/>
              <div class="label">ri-surround-sound-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-surround-sound-line"/>
              <div class="label">ri-surround-sound-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-survey-fill"/>
              <div class="label">ri-survey-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-survey-line"/>
              <div class="label">ri-survey-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-swap-box-fill"/>
              <div class="label">ri-swap-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-swap-box-line"/>
              <div class="label">ri-swap-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-swap-fill"/>
              <div class="label">ri-swap-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-swap-line"/>
              <div class="label">ri-swap-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-switch-fill"/>
              <div class="label">ri-switch-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-switch-line"/>
              <div class="label">ri-switch-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sword-fill"/>
              <div class="label">ri-sword-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-sword-line"/>
              <div class="label">ri-sword-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-syringe-fill"/>
              <div class="label">ri-syringe-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-syringe-line"/>
              <div class="label">ri-syringe-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-box-fill"/>
              <div class="label">ri-t-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-box-line"/>
              <div class="label">ri-t-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-2-fill"/>
              <div class="label">ri-t-shirt-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-2-line"/>
              <div class="label">ri-t-shirt-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-air-fill"/>
              <div class="label">ri-t-shirt-air-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-air-line"/>
              <div class="label">ri-t-shirt-air-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-fill"/>
              <div class="label">ri-t-shirt-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-t-shirt-line"/>
              <div class="label">ri-t-shirt-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-table-2"/>
              <div class="label">ri-table-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-table-alt-fill"/>
              <div class="label">ri-table-alt-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-table-alt-line"/>
              <div class="label">ri-table-alt-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-table-fill"/>
              <div class="label">ri-table-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-table-line"/>
              <div class="label">ri-table-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tablet-fill"/>
              <div class="label">ri-tablet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tablet-line"/>
              <div class="label">ri-tablet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-takeaway-fill"/>
              <div class="label">ri-takeaway-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-takeaway-line"/>
              <div class="label">ri-takeaway-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taobao-fill"/>
              <div class="label">ri-taobao-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taobao-line"/>
              <div class="label">ri-taobao-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tape-fill"/>
              <div class="label">ri-tape-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tape-line"/>
              <div class="label">ri-tape-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-task-fill"/>
              <div class="label">ri-task-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-task-line"/>
              <div class="label">ri-task-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taxi-fill"/>
              <div class="label">ri-taxi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taxi-line"/>
              <div class="label">ri-taxi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taxi-wifi-fill"/>
              <div class="label">ri-taxi-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-taxi-wifi-line"/>
              <div class="label">ri-taxi-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-team-fill"/>
              <div class="label">ri-team-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-team-line"/>
              <div class="label">ri-team-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-telegram-fill"/>
              <div class="label">ri-telegram-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-telegram-line"/>
              <div class="label">ri-telegram-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-temp-cold-fill"/>
              <div class="label">ri-temp-cold-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-temp-cold-line"/>
              <div class="label">ri-temp-cold-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-temp-hot-fill"/>
              <div class="label">ri-temp-hot-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-temp-hot-line"/>
              <div class="label">ri-temp-hot-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-box-fill"/>
              <div class="label">ri-terminal-box-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-box-line"/>
              <div class="label">ri-terminal-box-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-fill"/>
              <div class="label">ri-terminal-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-line"/>
              <div class="label">ri-terminal-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-window-fill"/>
              <div class="label">ri-terminal-window-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-terminal-window-line"/>
              <div class="label">ri-terminal-window-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-test-tube-fill"/>
              <div class="label">ri-test-tube-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-test-tube-line"/>
              <div class="label">ri-test-tube-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-text-direction-l"/>
              <div class="label">ri-text-direction-l</div>
            </div>
            <div class="icon">
               <x-icon name="ri-text-direction-r"/>
              <div class="label">ri-text-direction-r</div>
            </div>
            <div class="icon">
               <x-icon name="ri-text-spacing"/>
              <div class="label">ri-text-spacing</div>
            </div>
            <div class="icon">
               <x-icon name="ri-text-wrap"/>
              <div class="label">ri-text-wrap</div>
            </div>
            <div class="icon">
               <x-icon name="ri-text"/>
              <div class="label">ri-text</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thermometer-fill"/>
              <div class="label">ri-thermometer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thermometer-line"/>
              <div class="label">ri-thermometer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thumb-down-fill"/>
              <div class="label">ri-thumb-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thumb-down-line"/>
              <div class="label">ri-thumb-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thumb-up-fill"/>
              <div class="label">ri-thumb-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thumb-up-line"/>
              <div class="label">ri-thumb-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thunderstorms-fill"/>
              <div class="label">ri-thunderstorms-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-thunderstorms-line"/>
              <div class="label">ri-thunderstorms-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ticket-2-fill"/>
              <div class="label">ri-ticket-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ticket-2-line"/>
              <div class="label">ri-ticket-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ticket-fill"/>
              <div class="label">ri-ticket-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ticket-line"/>
              <div class="label">ri-ticket-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-time-fill"/>
              <div class="label">ri-time-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-time-line"/>
              <div class="label">ri-time-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-2-fill"/>
              <div class="label">ri-timer-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-2-line"/>
              <div class="label">ri-timer-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-fill"/>
              <div class="label">ri-timer-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-flash-fill"/>
              <div class="label">ri-timer-flash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-flash-line"/>
              <div class="label">ri-timer-flash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-timer-line"/>
              <div class="label">ri-timer-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-todo-fill"/>
              <div class="label">ri-todo-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-todo-line"/>
              <div class="label">ri-todo-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-toggle-fill"/>
              <div class="label">ri-toggle-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-toggle-line"/>
              <div class="label">ri-toggle-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tools-fill"/>
              <div class="label">ri-tools-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tools-line"/>
              <div class="label">ri-tools-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tornado-fill"/>
              <div class="label">ri-tornado-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tornado-line"/>
              <div class="label">ri-tornado-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trademark-fill"/>
              <div class="label">ri-trademark-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trademark-line"/>
              <div class="label">ri-trademark-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-traffic-light-fill"/>
              <div class="label">ri-traffic-light-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-traffic-light-line"/>
              <div class="label">ri-traffic-light-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-train-fill"/>
              <div class="label">ri-train-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-train-line"/>
              <div class="label">ri-train-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-train-wifi-fill"/>
              <div class="label">ri-train-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-train-wifi-line"/>
              <div class="label">ri-train-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-translate-2"/>
              <div class="label">ri-translate-2</div>
            </div>
            <div class="icon">
               <x-icon name="ri-translate"/>
              <div class="label">ri-translate</div>
            </div>
            <div class="icon">
               <x-icon name="ri-travesti-fill"/>
              <div class="label">ri-travesti-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-travesti-line"/>
              <div class="label">ri-travesti-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-treasure-map-fill"/>
              <div class="label">ri-treasure-map-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-treasure-map-line"/>
              <div class="label">ri-treasure-map-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trello-fill"/>
              <div class="label">ri-trello-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trello-line"/>
              <div class="label">ri-trello-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trophy-fill"/>
              <div class="label">ri-trophy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-trophy-line"/>
              <div class="label">ri-trophy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-truck-fill"/>
              <div class="label">ri-truck-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-truck-line"/>
              <div class="label">ri-truck-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tumblr-fill"/>
              <div class="label">ri-tumblr-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tumblr-line"/>
              <div class="label">ri-tumblr-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tv-2-fill"/>
              <div class="label">ri-tv-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tv-2-line"/>
              <div class="label">ri-tv-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tv-fill"/>
              <div class="label">ri-tv-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-tv-line"/>
              <div class="label">ri-tv-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-twitch-fill"/>
              <div class="label">ri-twitch-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-twitch-line"/>
              <div class="label">ri-twitch-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-twitter-fill"/>
              <div class="label">ri-twitter-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-twitter-line"/>
              <div class="label">ri-twitter-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-typhoon-fill"/>
              <div class="label">ri-typhoon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-typhoon-line"/>
              <div class="label">ri-typhoon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-u-disk-fill"/>
              <div class="label">ri-u-disk-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-u-disk-line"/>
              <div class="label">ri-u-disk-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ubuntu-fill"/>
              <div class="label">ri-ubuntu-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-ubuntu-line"/>
              <div class="label">ri-ubuntu-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-umbrella-fill"/>
              <div class="label">ri-umbrella-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-umbrella-line"/>
              <div class="label">ri-umbrella-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-underline"/>
              <div class="label">ri-underline</div>
            </div>
            <div class="icon">
               <x-icon name="ri-uninstall-fill"/>
              <div class="label">ri-uninstall-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-uninstall-line"/>
              <div class="label">ri-uninstall-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-unsplash-fill"/>
              <div class="label">ri-unsplash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-unsplash-line"/>
              <div class="label">ri-unsplash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-2-fill"/>
              <div class="label">ri-upload-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-2-line"/>
              <div class="label">ri-upload-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-cloud-2-fill"/>
              <div class="label">ri-upload-cloud-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-cloud-2-line"/>
              <div class="label">ri-upload-cloud-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-cloud-fill"/>
              <div class="label">ri-upload-cloud-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-cloud-line"/>
              <div class="label">ri-upload-cloud-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-fill"/>
              <div class="label">ri-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-upload-line"/>
              <div class="label">ri-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-usb-fill"/>
              <div class="label">ri-usb-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-usb-line"/>
              <div class="label">ri-usb-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-2-fill"/>
              <div class="label">ri-user-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-2-line"/>
              <div class="label">ri-user-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-3-fill"/>
              <div class="label">ri-user-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-3-line"/>
              <div class="label">ri-user-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-4-fill"/>
              <div class="label">ri-user-4-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-4-line"/>
              <div class="label">ri-user-4-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-5-fill"/>
              <div class="label">ri-user-5-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-5-line"/>
              <div class="label">ri-user-5-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-6-fill"/>
              <div class="label">ri-user-6-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-6-line"/>
              <div class="label">ri-user-6-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-add-fill"/>
              <div class="label">ri-user-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-add-line"/>
              <div class="label">ri-user-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-fill"/>
              <div class="label">ri-user-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-follow-fill"/>
              <div class="label">ri-user-follow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-follow-line"/>
              <div class="label">ri-user-follow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-heart-fill"/>
              <div class="label">ri-user-heart-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-heart-line"/>
              <div class="label">ri-user-heart-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-line"/>
              <div class="label">ri-user-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-location-fill"/>
              <div class="label">ri-user-location-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-location-line"/>
              <div class="label">ri-user-location-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-received-2-fill"/>
              <div class="label">ri-user-received-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-received-2-line"/>
              <div class="label">ri-user-received-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-received-fill"/>
              <div class="label">ri-user-received-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-received-line"/>
              <div class="label">ri-user-received-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-search-fill"/>
              <div class="label">ri-user-search-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-search-line"/>
              <div class="label">ri-user-search-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-settings-fill"/>
              <div class="label">ri-user-settings-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-settings-line"/>
              <div class="label">ri-user-settings-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-shared-2-fill"/>
              <div class="label">ri-user-shared-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-shared-2-line"/>
              <div class="label">ri-user-shared-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-shared-fill"/>
              <div class="label">ri-user-shared-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-shared-line"/>
              <div class="label">ri-user-shared-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-smile-fill"/>
              <div class="label">ri-user-smile-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-smile-line"/>
              <div class="label">ri-user-smile-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-star-fill"/>
              <div class="label">ri-user-star-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-star-line"/>
              <div class="label">ri-user-star-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-unfollow-fill"/>
              <div class="label">ri-user-unfollow-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-unfollow-line"/>
              <div class="label">ri-user-unfollow-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-voice-fill"/>
              <div class="label">ri-user-voice-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-user-voice-line"/>
              <div class="label">ri-user-voice-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-add-fill"/>
              <div class="label">ri-video-add-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-add-line"/>
              <div class="label">ri-video-add-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-chat-fill"/>
              <div class="label">ri-video-chat-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-chat-line"/>
              <div class="label">ri-video-chat-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-download-fill"/>
              <div class="label">ri-video-download-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-download-line"/>
              <div class="label">ri-video-download-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-fill"/>
              <div class="label">ri-video-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-line"/>
              <div class="label">ri-video-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-upload-fill"/>
              <div class="label">ri-video-upload-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-video-upload-line"/>
              <div class="label">ri-video-upload-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vidicon-2-fill"/>
              <div class="label">ri-vidicon-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vidicon-2-line"/>
              <div class="label">ri-vidicon-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vidicon-fill"/>
              <div class="label">ri-vidicon-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vidicon-line"/>
              <div class="label">ri-vidicon-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vimeo-fill"/>
              <div class="label">ri-vimeo-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vimeo-line"/>
              <div class="label">ri-vimeo-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-crown-2-fill"/>
              <div class="label">ri-vip-crown-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-crown-2-line"/>
              <div class="label">ri-vip-crown-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-crown-fill"/>
              <div class="label">ri-vip-crown-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-crown-line"/>
              <div class="label">ri-vip-crown-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-diamond-fill"/>
              <div class="label">ri-vip-diamond-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-diamond-line"/>
              <div class="label">ri-vip-diamond-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-fill"/>
              <div class="label">ri-vip-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vip-line"/>
              <div class="label">ri-vip-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-virus-fill"/>
              <div class="label">ri-virus-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-virus-line"/>
              <div class="label">ri-virus-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-visa-fill"/>
              <div class="label">ri-visa-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-visa-line"/>
              <div class="label">ri-visa-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-voice-recognition-fill"/>
              <div class="label">ri-voice-recognition-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-voice-recognition-line"/>
              <div class="label">ri-voice-recognition-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-voiceprint-fill"/>
              <div class="label">ri-voiceprint-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-voiceprint-line"/>
              <div class="label">ri-voiceprint-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-down-fill"/>
              <div class="label">ri-volume-down-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-down-line"/>
              <div class="label">ri-volume-down-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-mute-fill"/>
              <div class="label">ri-volume-mute-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-mute-line"/>
              <div class="label">ri-volume-mute-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-off-vibrate-fill"/>
              <div class="label">ri-volume-off-vibrate-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-off-vibrate-line"/>
              <div class="label">ri-volume-off-vibrate-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-up-fill"/>
              <div class="label">ri-volume-up-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-up-line"/>
              <div class="label">ri-volume-up-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-vibrate-fill"/>
              <div class="label">ri-volume-vibrate-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-volume-vibrate-line"/>
              <div class="label">ri-volume-vibrate-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vuejs-fill"/>
              <div class="label">ri-vuejs-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-vuejs-line"/>
              <div class="label">ri-vuejs-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-walk-fill"/>
              <div class="label">ri-walk-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-walk-line"/>
              <div class="label">ri-walk-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-2-fill"/>
              <div class="label">ri-wallet-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-2-line"/>
              <div class="label">ri-wallet-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-3-fill"/>
              <div class="label">ri-wallet-3-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-3-line"/>
              <div class="label">ri-wallet-3-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-fill"/>
              <div class="label">ri-wallet-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wallet-line"/>
              <div class="label">ri-wallet-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-water-flash-fill"/>
              <div class="label">ri-water-flash-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-water-flash-line"/>
              <div class="label">ri-water-flash-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-webcam-fill"/>
              <div class="label">ri-webcam-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-webcam-line"/>
              <div class="label">ri-webcam-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-2-fill"/>
              <div class="label">ri-wechat-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-2-line"/>
              <div class="label">ri-wechat-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-fill"/>
              <div class="label">ri-wechat-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-line"/>
              <div class="label">ri-wechat-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-pay-fill"/>
              <div class="label">ri-wechat-pay-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wechat-pay-line"/>
              <div class="label">ri-wechat-pay-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-weibo-fill"/>
              <div class="label">ri-weibo-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-weibo-line"/>
              <div class="label">ri-weibo-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-whatsapp-fill"/>
              <div class="label">ri-whatsapp-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-whatsapp-line"/>
              <div class="label">ri-whatsapp-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wheelchair-fill"/>
              <div class="label">ri-wheelchair-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wheelchair-line"/>
              <div class="label">ri-wheelchair-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wifi-fill"/>
              <div class="label">ri-wifi-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wifi-line"/>
              <div class="label">ri-wifi-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wifi-off-fill"/>
              <div class="label">ri-wifi-off-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wifi-off-line"/>
              <div class="label">ri-wifi-off-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-window-2-fill"/>
              <div class="label">ri-window-2-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-window-2-line"/>
              <div class="label">ri-window-2-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-window-fill"/>
              <div class="label">ri-window-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-window-line"/>
              <div class="label">ri-window-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-windows-fill"/>
              <div class="label">ri-windows-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-windows-line"/>
              <div class="label">ri-windows-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-windy-fill"/>
              <div class="label">ri-windy-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-windy-line"/>
              <div class="label">ri-windy-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wireless-charging-fill"/>
              <div class="label">ri-wireless-charging-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wireless-charging-line"/>
              <div class="label">ri-wireless-charging-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-women-fill"/>
              <div class="label">ri-women-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-women-line"/>
              <div class="label">ri-women-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-wubi-input"/>
              <div class="label">ri-wubi-input</div>
            </div>
            <div class="icon">
               <x-icon name="ri-xbox-fill"/>
              <div class="label">ri-xbox-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-xbox-line"/>
              <div class="label">ri-xbox-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-xing-fill"/>
              <div class="label">ri-xing-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-xing-line"/>
              <div class="label">ri-xing-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-youtube-fill"/>
              <div class="label">ri-youtube-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-youtube-line"/>
              <div class="label">ri-youtube-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zcool-fill"/>
              <div class="label">ri-zcool-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zcool-line"/>
              <div class="label">ri-zcool-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zhihu-fill"/>
              <div class="label">ri-zhihu-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zhihu-line"/>
              <div class="label">ri-zhihu-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zoom-in-fill"/>
              <div class="label">ri-zoom-in-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zoom-in-line"/>
              <div class="label">ri-zoom-in-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zoom-out-fill"/>
              <div class="label">ri-zoom-out-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zoom-out-line"/>
              <div class="label">ri-zoom-out-line</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zzz-fill"/>
              <div class="label">ri-zzz-fill</div>
            </div>
            <div class="icon">
               <x-icon name="ri-zzz-line"/>
              <div class="label">ri-zzz-line</div>
            </div>
    
          </div>
    </x-layout.page>
</x-layout.master>
