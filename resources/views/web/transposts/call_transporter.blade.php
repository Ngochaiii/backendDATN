@extends('layouts.front_end.error')

@section('content')
    <div class="initilazing-card">
        <div class="call-details">
            <div class="call-width-text">Liên lạc đến</div>
            <h2 style="text-align:center">Người vận chuyển</h2>

        </div><!-- /.cal-details -->

        <div class="time-box">
            <div class="date">
                <div class="icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.25 8.25H3.75V5.25C3.75 4.83675 4.08675 4.5 4.5 4.5H5.25V5.25C5.25 5.6625 5.5875 6 6 6C6.4125 6 6.75 5.6625 6.75 5.25V4.5H11.25V5.25C11.25 5.6625 11.5875 6 12 6C12.4125 6 12.75 5.6625 12.75 5.25V4.5H13.5C13.9132 4.5 14.25 4.83675 14.25 5.25V8.25ZM12 12.75H9C8.5875 12.75 8.25 12.4125 8.25 12C8.25 11.5875 8.5875 11.25 9 11.25H12C12.4125 11.25 12.75 11.5875 12.75 12C12.75 12.4125 12.4125 12.75 12 12.75ZM6 12.75C5.5875 12.75 5.25 12.4125 5.25 12C5.25 11.5875 5.5875 11.25 6 11.25C6.4125 11.25 6.75 11.5875 6.75 12C6.75 12.4125 6.4125 12.75 6 12.75ZM13.5 3H12.75V2.25C12.75 1.8375 12.4125 1.5 12 1.5C11.5875 1.5 11.25 1.8375 11.25 2.25V3H6.75V2.25C6.75 1.8375 6.4125 1.5 6 1.5C5.5875 1.5 5.25 1.8375 5.25 2.25V3H4.5C3.2595 3 2.25 4.0095 2.25 5.25V14.25C2.25 15.4905 3.2595 16.5 4.5 16.5H13.5C14.7405 16.5 15.75 15.4905 15.75 14.25V5.25C15.75 4.0095 14.7405 3 13.5 3Z"
                            fill="#3488FA" />
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="1"
                            width="14" height="16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.25 8.25H3.75V5.25C3.75 4.83675 4.08675 4.5 4.5 4.5H5.25V5.25C5.25 5.6625 5.5875 6 6 6C6.4125 6 6.75 5.6625 6.75 5.25V4.5H11.25V5.25C11.25 5.6625 11.5875 6 12 6C12.4125 6 12.75 5.6625 12.75 5.25V4.5H13.5C13.9132 4.5 14.25 4.83675 14.25 5.25V8.25ZM12 12.75H9C8.5875 12.75 8.25 12.4125 8.25 12C8.25 11.5875 8.5875 11.25 9 11.25H12C12.4125 11.25 12.75 11.5875 12.75 12C12.75 12.4125 12.4125 12.75 12 12.75ZM6 12.75C5.5875 12.75 5.25 12.4125 5.25 12C5.25 11.5875 5.5875 11.25 6 11.25C6.4125 11.25 6.75 11.5875 6.75 12C6.75 12.4125 6.4125 12.75 6 12.75ZM13.5 3H12.75V2.25C12.75 1.8375 12.4125 1.5 12 1.5C11.5875 1.5 11.25 1.8375 11.25 2.25V3H6.75V2.25C6.75 1.8375 6.4125 1.5 6 1.5C5.5875 1.5 5.25 1.8375 5.25 2.25V3H4.5C3.2595 3 2.25 4.0095 2.25 5.25V14.25C2.25 15.4905 3.2595 16.5 4.5 16.5H13.5C14.7405 16.5 15.75 15.4905 15.75 14.25V5.25C15.75 4.0095 14.7405 3 13.5 3Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0)">
                        </g>
                    </svg>
                </div>

                <span>7 Oct, Weds</span>
            </div>

            <div class="time">
                <div class="icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 9.75H9C8.586 9.75 8.25 9.41475 8.25 9V6C8.25 5.58525 8.586 5.25 9 5.25C9.414 5.25 9.75 5.58525 9.75 6V8.25H12C12.4148 8.25 12.75 8.58525 12.75 9C12.75 9.41475 12.4148 9.75 12 9.75ZM9 1.5C4.8645 1.5 1.5 4.8645 1.5 9C1.5 13.1355 4.8645 16.5 9 16.5C13.1355 16.5 16.5 13.1355 16.5 9C16.5 4.8645 13.1355 1.5 9 1.5Z"
                            fill="#3488FA" />
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1"
                            width="16" height="16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 9.75H9C8.586 9.75 8.25 9.41475 8.25 9V6C8.25 5.58525 8.586 5.25 9 5.25C9.414 5.25 9.75 5.58525 9.75 6V8.25H12C12.4148 8.25 12.75 8.58525 12.75 9C12.75 9.41475 12.4148 9.75 12 9.75ZM9 1.5C4.8645 1.5 1.5 4.8645 1.5 9C1.5 13.1355 4.8645 16.5 9 16.5C13.1355 16.5 16.5 13.1355 16.5 9C16.5 4.8645 13.1355 1.5 9 1.5Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0)">
                        </g>
                    </svg>
                </div>

                <span>10:15AM - 10:30AM</span>
            </div>

        </div><!-- /.time-box -->

        <div class="timezone">Timezone: VietNam/HaNoi</div>

        <div class="video-preview">
            <img src="https://static.chotot.com/storage/chotot-kinhnghiem/c2c/2021/12/b3d01a73-lam-shipper-cho-cong-ty-nao-tot-nhat-thumb.jpeg"
                alt="Video Call" width="384">
            <div class="video-controls">
                <button class="control-button">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.99999 8.74999C9.31083 8.74999 8.74999 9.31082 8.74999 9.99999C8.74999 10.6892 9.31083 11.25 9.99999 11.25C10.6892 11.25 11.25 10.6892 11.25 9.99999C11.25 9.31082 10.6892 8.74999 9.99999 8.74999ZM9.99999 12.9167C8.39166 12.9167 7.08333 11.6083 7.08333 9.99999C7.08333 8.39166 8.39166 7.08332 9.99999 7.08332C11.6083 7.08332 12.9167 8.39166 12.9167 9.99999C12.9167 11.6083 11.6083 12.9167 9.99999 12.9167ZM18.2433 8.59916L17.5875 6.49832C17.4308 5.99416 17.0892 5.58666 16.6267 5.34999C16.1758 5.11916 15.6633 5.07999 15.1833 5.23999L14.9 5.33416C14.4533 5.48499 13.955 5.40166 13.5725 5.11416L13.4833 5.04666C13.1192 4.77332 12.9033 4.32749 12.905 3.85582L12.9067 3.62332C12.9083 3.09416 12.7067 2.59832 12.3375 2.22749C11.98 1.86832 11.5075 1.66999 11.0058 1.66916L8.88333 1.66666H8.88C7.835 1.66666 6.98166 2.53499 6.9775 3.60499L6.97666 3.80582C6.975 4.30416 6.74583 4.77416 6.36583 5.06416L6.25833 5.14582C5.83083 5.47082 5.27666 5.56332 4.7775 5.39332C4.3125 5.23416 3.815 5.26832 3.375 5.48999C2.925 5.71749 2.5925 6.11249 2.43833 6.60166L1.75833 8.76416C1.43583 9.79082 1.9775 10.8675 2.99166 11.215L3.12833 11.2617C3.56 11.4092 3.9075 11.7858 4.06083 12.2708L4.10666 12.4108C4.28916 12.9492 4.22583 13.5167 3.91416 13.9583C3.31416 14.8108 3.49666 16.0133 4.32166 16.6383L6.04833 17.95C6.38 18.2017 6.7725 18.3333 7.17833 18.3333C7.27416 18.3333 7.37083 18.3267 7.4675 18.3117C7.9775 18.2317 8.425 17.9525 8.72666 17.525L8.91916 17.2517C9.19583 16.8583 9.61833 16.6258 10.1092 16.6125C10.5983 16.585 11.065 16.84 11.3567 17.26L11.455 17.4033C11.7542 17.835 12.2008 18.1183 12.7125 18.2008C13.22 18.2817 13.7258 18.1558 14.1383 17.8442L15.8558 16.5475C16.6842 15.9233 16.8742 14.7167 16.2792 13.8567L16.0617 13.5442C15.7883 13.1492 15.7083 12.635 15.8467 12.1675C15.9975 11.6575 16.3742 11.2575 16.855 11.0958L17.0225 11.04C18.0117 10.7092 18.5592 9.61416 18.2433 8.59916Z"
                            fill="#222222" />
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1"
                            width="18" height="18">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.99999 8.74999C9.31083 8.74999 8.74999 9.31082 8.74999 9.99999C8.74999 10.6892 9.31083 11.25 9.99999 11.25C10.6892 11.25 11.25 10.6892 11.25 9.99999C11.25 9.31082 10.6892 8.74999 9.99999 8.74999ZM9.99999 12.9167C8.39166 12.9167 7.08333 11.6083 7.08333 9.99999C7.08333 8.39166 8.39166 7.08332 9.99999 7.08332C11.6083 7.08332 12.9167 8.39166 12.9167 9.99999C12.9167 11.6083 11.6083 12.9167 9.99999 12.9167ZM18.2433 8.59916L17.5875 6.49832C17.4308 5.99416 17.0892 5.58666 16.6267 5.34999C16.1758 5.11916 15.6633 5.07999 15.1833 5.23999L14.9 5.33416C14.4533 5.48499 13.955 5.40166 13.5725 5.11416L13.4833 5.04666C13.1192 4.77332 12.9033 4.32749 12.905 3.85582L12.9067 3.62332C12.9083 3.09416 12.7067 2.59832 12.3375 2.22749C11.98 1.86832 11.5075 1.66999 11.0058 1.66916L8.88333 1.66666H8.88C7.835 1.66666 6.98166 2.53499 6.9775 3.60499L6.97666 3.80582C6.975 4.30416 6.74583 4.77416 6.36583 5.06416L6.25833 5.14582C5.83083 5.47082 5.27666 5.56332 4.7775 5.39332C4.3125 5.23416 3.815 5.26832 3.375 5.48999C2.925 5.71749 2.5925 6.11249 2.43833 6.60166L1.75833 8.76416C1.43583 9.79082 1.9775 10.8675 2.99166 11.215L3.12833 11.2617C3.56 11.4092 3.9075 11.7858 4.06083 12.2708L4.10666 12.4108C4.28916 12.9492 4.22583 13.5167 3.91416 13.9583C3.31416 14.8108 3.49666 16.0133 4.32166 16.6383L6.04833 17.95C6.38 18.2017 6.7725 18.3333 7.17833 18.3333C7.27416 18.3333 7.37083 18.3267 7.4675 18.3117C7.9775 18.2317 8.425 17.9525 8.72666 17.525L8.91916 17.2517C9.19583 16.8583 9.61833 16.6258 10.1092 16.6125C10.5983 16.585 11.065 16.84 11.3567 17.26L11.455 17.4033C11.7542 17.835 12.2008 18.1183 12.7125 18.2008C13.22 18.2817 13.7258 18.1558 14.1383 17.8442L15.8558 16.5475C16.6842 15.9233 16.8742 14.7167 16.2792 13.8567L16.0617 13.5442C15.7883 13.1492 15.7083 12.635 15.8467 12.1675C15.9975 11.6575 16.3742 11.2575 16.855 11.0958L17.0225 11.04C18.0117 10.7092 18.5592 9.61416 18.2433 8.59916Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0)">
                        </g>
                    </svg>

                </button>
                <button class="control-button">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.7588 5.35904C15.2893 5.15504 14.7448 5.24354 14.3705 5.58854L12.7498 7.08854V5.99954C12.7498 4.75904 11.741 3.74954 10.4998 3.74954H3.74976C2.50926 3.74954 1.49976 4.75904 1.49976 5.99954V11.9995C1.49976 13.2408 2.50926 14.2495 3.74976 14.2495H10.4998C11.741 14.2495 12.7498 13.2408 12.7498 11.9995V10.9113L14.3705 12.4105C14.6113 12.6333 14.9225 12.7495 15.2398 12.7495C15.4145 12.7495 15.5908 12.7143 15.7588 12.6408C16.2155 12.4413 16.4998 12.0145 16.4998 11.5278V6.47204C16.4998 5.98529 16.2155 5.55854 15.7588 5.35904Z"
                            fill="#222222" />
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="3"
                            width="16" height="12">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.7588 5.35904C15.2893 5.15504 14.7448 5.24354 14.3705 5.58854L12.7498 7.08854V5.99954C12.7498 4.75904 11.741 3.74954 10.4998 3.74954H3.74976C2.50926 3.74954 1.49976 4.75904 1.49976 5.99954V11.9995C1.49976 13.2408 2.50926 14.2495 3.74976 14.2495H10.4998C11.741 14.2495 12.7498 13.2408 12.7498 11.9995V10.9113L14.3705 12.4105C14.6113 12.6333 14.9225 12.7495 15.2398 12.7495C15.4145 12.7495 15.5908 12.7143 15.7588 12.6408C16.2155 12.4413 16.4998 12.0145 16.4998 11.5278V6.47204C16.4998 5.98529 16.2155 5.55854 15.7588 5.35904Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0)">
                        </g>
                    </svg>

                </button>
                <button class="control-button">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 8.25C12 9.9045 10.6545 11.25 9 11.25C7.3455 11.25 6 9.9045 6 8.25V4.5C6 2.8455 7.3455 1.5 9 1.5C10.6545 1.5 12 2.8455 12 4.5V8.25ZM13.5 7.5C13.9148 7.5 14.25 7.836 14.25 8.25C14.25 10.89 12.2902 13.074 9.75 13.44V15H11.3287C11.6985 15 12 15.3015 12 15.6713V15.8287C12 16.1985 11.6985 16.5 11.3287 16.5H6.67125C6.3015 16.5 6 16.1985 6 15.8287V15.6713C6 15.3015 6.3015 15 6.67125 15H8.25V13.44C5.70975 13.074 3.75 10.89 3.75 8.25C3.75 7.836 4.08525 7.5 4.5 7.5C4.91475 7.5 5.25 7.836 5.25 8.25C5.25 10.3177 6.93225 12 9 12C11.0677 12 12.75 10.3177 12.75 8.25C12.75 7.836 13.0852 7.5 13.5 7.5Z"
                            fill="#222222" />
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="1"
                            width="12" height="16">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 8.25C12 9.9045 10.6545 11.25 9 11.25C7.3455 11.25 6 9.9045 6 8.25V4.5C6 2.8455 7.3455 1.5 9 1.5C10.6545 1.5 12 2.8455 12 4.5V8.25ZM13.5 7.5C13.9148 7.5 14.25 7.836 14.25 8.25C14.25 10.89 12.2902 13.074 9.75 13.44V15H11.3287C11.6985 15 12 15.3015 12 15.6713V15.8287C12 16.1985 11.6985 16.5 11.3287 16.5H6.67125C6.3015 16.5 6 16.1985 6 15.8287V15.6713C6 15.3015 6.3015 15 6.67125 15H8.25V13.44C5.70975 13.074 3.75 10.89 3.75 8.25C3.75 7.836 4.08525 7.5 4.5 7.5C4.91475 7.5 5.25 7.836 5.25 8.25C5.25 10.3177 6.93225 12 9 12C11.0677 12 12.75 10.3177 12.75 8.25C12.75 7.836 13.0852 7.5 13.5 7.5Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0)">
                        </g>
                    </svg>

                </button>
            </div>
        </div><!-- /.video-preview -->

        <div class="call-user-info">
            <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19 20C19 20.552 18.553 21 18 21C17.447 21 17 20.552 17 20C17 17.243 14.757 15 12 15C9.243 15 7 17.243 7 20C7 20.552 6.553 21 6 21C5.447 21 5 20.552 5 20C5 16.14 8.141 13 12 13C15.859 13 19 16.14 19 20ZM12 5C13.103 5 14 5.897 14 7C14 8.103 13.103 9 12 9C10.897 9 10 8.103 10 7C10 5.897 10.897 5 12 5ZM12 11C14.206 11 16 9.206 16 7C16 4.794 14.206 3 12 3C9.794 3 8 4.794 8 7C8 9.206 9.794 11 12 11Z"
                        fill="#3488FA" />
                </svg>
            </div>
            <span class="user-name">Ali Duman</span>
        </div><!-- /.user-info -->

        <div class="settings">
            <div class="input-item">
                <label for="camera">Camera</label>
                <div class="custom-select">
                    <select name="camera" id="camera">
                        <option value="0">Facetime HD Camera</option>
                        <option value="1">Logitech 1080P HD Camera</option>
                    </select>
                    <div class="custom-appearence">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5 6.75C4.6205 6.75 4.2575 6.57525 4.0055 6.2685L0.845752 2.445C0.467752 1.98675 0.392002 1.3365 0.651502 0.78675C0.880252 0.3015 1.3355 0 1.84025 0H8.15975C8.6645 0 9.11975 0.3015 9.3485 0.78675C9.608 1.3365 9.53225 1.98675 9.155 2.44425L5.9945 6.2685C5.7425 6.57525 5.3795 6.75 5 6.75Z"
                                fill="#222222" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="input-item">
                <label for="speaker">Speaker</label>
                <div class="custom-select">
                    <select name="speaker" id="speaker">
                        <option value="0">Built-in Output (Headp...</option>
                    </select>
                    <div class="custom-appearence">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5 6.75C4.6205 6.75 4.2575 6.57525 4.0055 6.2685L0.845752 2.445C0.467752 1.98675 0.392002 1.3365 0.651502 0.78675C0.880252 0.3015 1.3355 0 1.84025 0H8.15975C8.6645 0 9.11975 0.3015 9.3485 0.78675C9.608 1.3365 9.53225 1.98675 9.155 2.44425L5.9945 6.2685C5.7425 6.57525 5.3795 6.75 5 6.75Z"
                                fill="#222222" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="input-item">
                <label for="microphone">Microphone</label>
                <div class="custom-select">
                    <select name="microphone" id="microphone">
                        <option value="0">Built-in Microphone (E...</option>
                    </select>
                    <div class="custom-appearence">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5 6.75C4.6205 6.75 4.2575 6.57525 4.0055 6.2685L0.845752 2.445C0.467752 1.98675 0.392002 1.3365 0.651502 0.78675C0.880252 0.3015 1.3355 0 1.84025 0H8.15975C8.6645 0 9.11975 0.3015 9.3485 0.78675C9.608 1.3365 9.53225 1.98675 9.155 2.44425L5.9945 6.2685C5.7425 6.57525 5.3795 6.75 5 6.75Z"
                                fill="#222222" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="input-item mt-2">
                <label>Liên Lac :</label>
                <a href="tel:0936670466" class="col-sm-7">Click để Gọi</a>
            </div>
            <div class="input-item mt-2">
                <label>Tin nhắn :</label>
                <a href="sms:0936670466" class="col-sm-7">Click để Nhắn Tin</a>
            </div>
            <div class="input-item mt-2">
                <label>Zalo:</label>
                <a href="https://zalo.me/84936670466">09366 70 466</a>
            </div>
        </div><!-- /.settings -->

        <a href="{{route('transposts.call_shipper',$id_transport)}}"
            class="btn btn-primary btn-sm">
            Hoàn thành
        </a>
    </div>
@endsection
@push('css')
    <style>
        /* Variables */
        $primary-color: #3488fa;
        $font: "SF Pro Text", sans-serif;

        /* Mixins */
        @mixin display-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        html,
        body {
            font-family: $font;
            font-size: 16px;
        }

        button {
            height: 48px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 400;
            line-height: 18px;
            color: #3488fa;
            border: 1px solid #3488fa;
            background-color: #3488fa;
            color: #ffffff;

            cursor: pointer;
            transition: background-color 0.3s;

            &:focus,
            &:active {
                outline: none;
            }

            &.gost-button {
                color: #3488fa;
                background-color: #ffffff;
                border: 1px solid #3488fa;

                &:hover {
                    background-color: #3488fa;
                    color: #ffffff;
                }
            }
        }

        .custom-select {
            position: relative;
            border: 1px solid #b9c3d5;
            border-radius: 8px;




        }

        .custom-select .custom-appearence {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .custom-select select {
            height: 48px;
            width: 236px;
            border-color: transparent;
            border-radius: 8px;
            padding-left: 16px;
            padding-right: 16px;
            font-family: $font;
            font-size: 1rem;
            font-weight: 400;
            line-height: 18px;
            text-align: left;
            cursor: pointer;
            -moz-appearance: none;
            /* Firefox */
            -webkit-appearance: none;
            /* Safari and Chrome */
            appearance: none;
        }


        .initilazing-card .call-details .call-width-text h2 {
            font-weight: bold;
            font-size: 1.8rem;
            line-height: 29px;
            font-weight: 700;
            text-align: center;
            color: #222222;
            margin-bottom: 16px;
        }

        .initilazing-card .call-details .call-width-text {

            font-size: 0.8rem;
            font-weight: 400;
            line-height: 16px;
            text-align: center;
            color: $primary-color;
            margin-bottom: 4px;
        }

        .initilazing-card .call-details .call-width-text .time {
            font-size: 0.8rem;
            line-height: 16px;
            color: #818b9d;
            text-align: center;
        }

        .initilazing-card {
            display: flex;
            flex-direction: column;
            padding: 32px 24px;

            width: 384px;
            margin: 30px auto;

            background: #ffffff;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
        }

        .initilazing-card .time-box svg {
            margin-right: 5px;
        }

        .initilazing-card .time-box {
            max-width: 100%;
            display: flex;
            justify-content: center;
            padding: 16px;
            border: 1px solid #b9c3d5;
            box-sizing: border-box;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 400;
            line-height: 1rem;
            margin: 0 auto 8px;
        }

        .initilazing-card .time-box>div {
            display: flex;
            align-items: center;
        }

        .initilazing-card .time-box>div first-child {
            margin-right: 20px;
        }

        .initilazing-card .timezone {
            font-size: .8rem;
            line-height: 16px;
            font-weight: 400;
            text-align: center;
            color: #818b9d;
            margin-bottom: 24px;
        }

        .initilazing-card .video-preview {
            position: relative;
            margin-bottom: 16px;
        }

        .initilazing-card .video-preview img {
            display: block;
            border-radius: 8px;
        }

        .initilazing-card .video-preview .video-controls {
            width: 100%;
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 12px;


        }

        .initilazing-card .video-preview .control-button {
            width: 48px;
            height: 48px;
            padding: 0;
            background-color: #ffffff;
            border-width: 0;
            border-radius: 50%;
            box-shadow: none;
            cursor: pointer;
            margin-left: 6px;
            margin-right: 6px;

            &:hover {
                background-color: #f4f7fa;
            }

            &:focus {
                outline: none;
            }
        }

        .initilazing-card .call-user-info {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            border: 1px solid #b9c3d4;
            font-weight: 400;
            font-size: 1rem;
            line-height: 18px;
            border-radius: 8px;
            padding: 10px 15px;
            margin-bottom: 16px;

            .icon {
                margin-right: 5px;
            }
        }

        .initilazing-card .settings {
            margin-bottom: 24px;

        }

        .initilazing-card .settings .input-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;

            label {
                font-size: 1rem;
                font-weight: 400;
                line-height: 18px;
            }

            button.gost-button {
                width: 236px;
            }
        }

        button.join-button {
            width: auto;
        }
    </style>
@endpush
