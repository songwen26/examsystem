;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-bi" viewBox="0 0 1025 1024">' +
    '' +
    '<path d="M1014.569206 347.178643 811.920504 139.502071C797.859513 125.185426 773.91322 124.248027 758.318303 137.542055L124.551103 677.143225c-0.852181 0.766963-1.193054 1.874799-1.960017 2.641762C120.801506 681.659786 118.671052 683.193712 117.222344 685.409384c-0.766963 1.278272-0.852181 2.556544-1.448708 3.834816C115.432764 690.096381 114.580582 690.607689 114.23971 691.374652l-112.232271 285.736375c-9.714866 24.713256 17.554934 52.664802 44.739516 45.847352l314.880974-77.974585c0.937399-0.255654 1.619144-1.022618 2.556544-1.36349 1.36349-0.426091 2.72698-0.340873 4.09047-0.937399 2.386108-1.107836 4.09047-2.812198 6.135705-4.260906 1.107836-0.766963 2.471326-0.937399 3.493943-1.789581l633.7672-539.515953C1027.181489 383.907656 1028.544979 361.495288 1014.569206 347.178643zM365.63318 852.181255 320.978882 761.679606C319.359738 758.441317 317.229285 755.543901 314.672741 752.902139c-2.556544-2.556544-5.45396-4.772215-8.862685-6.561796L213.604044 696.402522l440.322055-374.959752 152.029136 155.863952L365.63318 852.181255zM169.71671 755.032592l87.092924 47.125623 42.26819 85.47378L98.048266 937.399381 169.71671 755.032592zM862.54007 429.15848 710.425716 273.294529l70.219735-59.737906 152.029136 155.778733L862.54007 429.15848z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-fullscreen-exit" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M706.34222 676.159804l156.23839 0c5.922896 0.132006 11.887748-2.018983 16.407692-6.538927 8.78406-8.78406 8.782014-23.026436 0-31.80845-4.468778-4.468778-10.348696-6.637164-16.204054-6.558369l-0.001023-0.077771-210.740702 0.001023c-0.084934 0-0.164752 0.023536-0.248663 0.025583-0.445138 0.00307-0.88209 0.103354-1.326205 0.13303-1.846044 0.12996-3.614317 0.479931-5.309936 1.028423-0.586354 0.187265-1.189082 0.310062-1.762133 0.547469-0.748037 0.312108-1.425466 0.741897-2.130524 1.12973-0.575098 0.316202-1.173732 0.567935-1.725294 0.938372-1.222851 0.818645-2.364861 1.74883-3.40147 2.785439-1.036609 1.037632-1.966795 2.178619-2.785439 3.40147-0.36839 0.549515-0.6191 1.147126-0.934279 1.720178-0.37146 0.674359-0.799202 1.312902-1.100054 2.028193-0.01535 0.032746-0.019443 0.071631-0.033769 0.107447-0.236384 0.569982-0.357134 1.168616-0.543376 1.753947-0.553609 1.703805-0.904603 3.482311-1.033539 5.338588-0.028653 0.436952-0.127913 0.867764-0.132006 1.305739-0.001023 0.084934-0.024559 0.163729-0.024559 0.248663l-0.001023 208.007451 0.029676 0c0.00307 5.753027 2.198062 11.504008 6.585999 15.891945 8.78406 8.78406 23.024389 8.78406 31.80845 0 4.465708-4.466732 6.636141-10.341532 6.560416-16.194844l-0.001023-153.405879 197.85523 197.85523c8.78406 8.78406 23.024389 8.78406 31.807427 0 8.78406-8.78406 8.78406-23.024389 0-31.80845L706.34222 676.159804z"  ></path>' +
    '' +
    '<path d="M631.089305 370.580107c0.004093 0.444115 0.103354 0.88209 0.13303 1.325182 0.130983 1.846044 0.479931 3.615341 1.028423 5.310959 0.188288 0.587378 0.311085 1.189082 0.547469 1.762133 0.312108 0.74906 0.74292 1.425466 1.130753 2.130524 0.315178 0.576121 0.567935 1.173732 0.937348 1.726318 0.818645 1.222851 1.749854 2.364861 2.785439 3.400446 1.036609 1.036609 2.178619 1.966795 3.40147 2.785439 0.548492 0.369414 1.147126 0.6191 1.720178 0.934279 0.673335 0.37146 1.312902 0.799202 2.028193 1.101077 0.033769 0.013303 0.071631 0.019443 0.107447 0.032746 0.569982 0.236384 1.168616 0.357134 1.753947 0.544399 1.703805 0.552585 3.482311 0.904603 5.338588 1.032516 0.436952 0.029676 0.868787 0.128937 1.306762 0.132006 0.084934 0.001023 0.163729 0.025583 0.248663 0.025583l208.007451 0.001023 0-0.029676c5.753027-0.00307 11.505032-2.197038 15.892969-6.585999 8.78406-8.78406 8.78406-23.024389 0-31.80845-4.466732-4.465708-10.341532-6.635117-16.194844-6.559393L707.85569 347.84122l197.854207-197.85523c8.78406-8.78406 8.78406-23.024389 0-31.807427-8.783037-8.78406-23.023366-8.78406-31.807427 0L676.04724 316.031746l0.001023-156.239414c0.132006-5.922896-2.018983-11.886725-6.53995-16.407692-8.78406-8.783037-23.025413-8.783037-31.80845 0-4.467755 4.468778-6.636141 10.348696-6.558369 16.204054l-0.077771 0 0.001023 210.742748C631.064746 370.416378 631.088282 370.495172 631.089305 370.580107z"  ></path>' +
    '' +
    '<path d="M395.934564 653.41273c-0.00307-0.437975-0.101307-0.868787-0.130983-1.305739-0.128937-1.856277-0.479931-3.634784-1.032516-5.338588-0.187265-0.584308-0.308015-1.182942-0.544399-1.753947-0.013303-0.035816-0.019443-0.073678-0.032746-0.107447-0.301875-0.714268-0.728594-1.353834-1.101077-2.028193-0.315178-0.573051-0.564865-1.170662-0.934279-1.720178-0.818645-1.222851-1.747807-2.363837-2.785439-3.400446-1.036609-1.036609-2.178619-1.966795-3.400446-2.785439-0.552585-0.369414-1.150196-0.62217-1.726318-0.938372-0.704035-0.387833-1.381463-0.818645-2.130524-1.130753-0.573051-0.237407-1.174756-0.360204-1.762133-0.546446-1.695618-0.548492-3.464915-0.898463-5.310959-1.028423-0.443092-0.030699-0.881067-0.12996-1.325182-0.13303-0.084934-0.001023-0.163729-0.026606-0.248663-0.026606l-210.742748-0.001023 0 0.077771c-5.855358-0.078795-11.735275 2.090615-16.204054 6.559393-8.783037 8.782014-8.783037 23.024389 0 31.807427 4.520967 4.519943 10.484795 6.670933 16.407692 6.53995l156.239414-0.001023-197.856253 197.85523c-8.783037 8.78406-8.783037 23.024389 0 31.80845 8.78406 8.783037 23.024389 8.783037 31.80845 0l197.85523-197.856253 0 153.405879c-0.075725 5.853311 2.092661 11.729136 6.559393 16.194844 8.78406 8.78406 23.024389 8.78406 31.80845 0 4.38896-4.38896 6.583952-10.139941 6.585999-15.892969l0.029676 0-0.001023-208.007451C395.960147 653.576459 395.935588 653.497665 395.934564 653.41273z"  ></path>' +
    '' +
    '<path d="M316.14431 349.346503 162.738431 349.346503c-5.853311-0.075725-11.729136 2.093684-16.194844 6.560416-8.783037 8.78406-8.78406 23.024389 0 31.807427 4.38896 4.38896 10.139941 6.583952 15.893992 6.587022l0 0.029676 208.006428-0.001023c0.085958 0 0.164752-0.023536 0.248663-0.025583 0.437975-0.00307 0.86981-0.102331 1.306762-0.130983 1.856277-0.128937 3.634784-0.480954 5.338588-1.033539 0.584308-0.187265 1.182942-0.308015 1.753947-0.544399 0.034792-0.013303 0.072655-0.01842 0.107447-0.032746 0.714268-0.301875 1.353834-0.728594 2.028193-1.100054 0.573051-0.315178 1.171686-0.565888 1.720178-0.934279 1.222851-0.818645 2.363837-1.74883 3.400446-2.785439 1.036609-1.036609 1.966795-2.178619 2.785439-3.40147 0.369414-0.552585 0.62217-1.150196 0.937348-1.725294 0.387833-0.704035 0.818645-1.381463 1.130753-2.130524 0.236384-0.573051 0.35918-1.174756 0.547469-1.762133 0.548492-1.695618 0.898463-3.464915 1.028423-5.310959 0.030699-0.443092 0.128937-0.881067 0.13303-1.325182 0.001023-0.084934 0.025583-0.163729 0.025583-0.248663l0.001023-210.741725-0.076748-0.001023c0.077771-5.855358-2.091638-11.735275-6.559393-16.20303-8.783037-8.783037-23.024389-8.78406-31.807427 0-4.520967 4.520967-6.671956 10.484795-6.53995 16.407692l0.001023 156.239414-197.856253-197.85523c-8.78406-8.78406-23.024389-8.78406-31.807427 0-8.783037 8.78406-8.78406 23.024389 0 31.80845L316.14431 349.346503z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-jinlingyingcaiwangtubiao44" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M411.5712 584.832l-320.768 320.768 19.9936-169.5488c1.2544-10.5472-6.2976-20.0704-16.8192-21.3248-10.496-1.3312-20.0704 6.2976-21.3248 16.8192l-26.4704 224.4864c-0.6912 5.8368 1.3312 11.6736 5.4784 15.8208 3.6352 3.6352 8.5248 5.632 13.568 5.632 0.7424 0 1.5104-0.0256 2.2528-0.128l224.4864-26.4704c10.5216-1.2288 18.0736-10.7776 16.8192-21.3248-1.2288-10.5216-10.752-18.176-21.3248-16.8192l-169.5488 19.9936 320.768-320.768c7.5008-7.5008 7.5008-19.6608 0-27.1616S419.072 577.3312 411.5712 584.832z"  ></path>' +
    '' +
    '<path d="M117.9648 100.6848l169.5488 19.9936c10.5984 1.408 20.0704-6.2976 21.3248-16.8192 1.2544-10.5472-6.2976-20.0704-16.8192-21.3248L67.5072 56.064c-5.8624-0.768-11.6736 1.3056-15.8208 5.4784-4.1728 4.1472-6.1952 9.984-5.4784 15.8208l26.4704 224.4864c1.152 9.7536 9.4464 16.9472 19.0464 16.9472 0.7424 0 1.5104-0.0256 2.2784-0.128 10.5216-1.2288 18.0736-10.7776 16.8192-21.3248L90.8032 127.8208l320.768 320.768c3.7376 3.7376 8.6528 5.632 13.568 5.632s9.8304-1.8688 13.568-5.632c7.5008-7.5008 7.5008-19.6608 0-27.1616L117.9648 100.6848z"  ></path>' +
    '' +
    '<path d="M918.4512 714.7264c-10.5216 1.2288-18.0736 10.7776-16.8192 21.3248l19.9936 169.5488-320.768-320.768c-7.5008-7.5008-19.6608-7.5008-27.1616 0s-7.5008 19.6608 0 27.1616l320.768 320.768-169.5488-19.9936c-10.624-1.3312-20.0704 6.2976-21.3248 16.8192-1.2544 10.5472 6.2976 20.0704 16.8192 21.3248l224.4864 26.4704c0.7424 0.1024 1.5104 0.128 2.2528 0.128 5.0688 0 9.9584-1.9968 13.568-5.632 4.1728-4.1472 6.1696-9.984 5.4784-15.8208l-26.4704-224.4864C938.5472 721.024 928.8704 713.3696 918.4512 714.7264z"  ></path>' +
    '' +
    '<path d="M587.2896 454.2208c4.9152 0 9.8304-1.8688 13.568-5.632l320.768-320.768-19.9936 169.5488c-1.2544 10.5472 6.2976 20.0704 16.8192 21.3248 0.768 0.1024 1.536 0.128 2.2784 0.128 9.6 0 17.8944-7.1936 19.0464-16.9472l26.4704-224.4864c0.6912-5.8368-1.3312-11.6736-5.4784-15.8208-4.1728-4.1728-10.0608-6.2464-15.8208-5.4784l-224.4864 26.4704c-10.5216 1.2288-18.0736 10.7776-16.8192 21.3248 1.2288 10.5216 10.6752 18.176 21.3248 16.8192l169.5488-19.9936-320.768 320.768c-7.5008 7.5008-7.5008 19.6608 0 27.1616C577.4592 452.352 582.3744 454.2208 587.2896 454.2208z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-pc" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M935.6192 68.266667 88.3808 68.266667C49.0592 68.266667 17.066667 100.8064 17.066667 140.8l0 554.666667c0 39.994667 31.991467 72.533333 71.314133 72.533333L473.6 768l0 112.424533L298.666667 880.424533c-20.795733 0-37.6544 16.858667-37.6544 37.6544S277.8688 955.733333 298.666667 955.733333l426.666667 0c20.795733 0 37.6544-16.858667 37.6544-37.6544S746.129067 880.424533 725.333333 880.424533L550.4 880.424533 550.4 768l385.2192 0C974.941867 768 1006.933333 735.461333 1006.933333 695.466667L1006.933333 140.8C1006.933333 100.8064 974.941867 68.266667 935.6192 68.266667zM930.133333 691.2 93.866667 691.2 93.866667 145.066667l836.266667 0L930.133333 691.2z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-advice" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M563.204267 1007.2c-7.5264 0-14.992-2.485333-21.131733-7.3216L312.434133 818.933333 85.333333 818.933333c-37.642667 0-68.266667-30.622933-68.266667-68.266667l0-494.933333c0-37.6416 30.624-68.266667 68.266667-68.266667l750.933333 0c37.642667 0 68.266667 30.625067 68.266667 68.266667l0 494.933333c0 37.643733-30.624 68.266667-68.266667 68.266667L597.333333 818.933333l0 154.133333c0 13.076267-7.469867 25.0016-19.233067 30.7104C573.3664 1006.072533 568.270933 1007.2 563.204267 1007.2zM85.333333 255.733333l0 494.933333 238.933333 0c7.664 0 15.105067 2.5792 21.125333 7.322667L529.066667 902.7168 529.066667 784.8c0-18.8512 15.282133-34.133333 34.133333-34.133333l273.066667 0 0-494.933333L85.333333 255.733333z"  ></path>' +
    '' +
    '<path d="M699.733333 426.4 221.866667 426.4c-18.8512 0-34.133333-15.281067-34.133333-34.133333 0-18.8512 15.282133-34.133333 34.133333-34.133333l477.866667 0c18.8512 0 34.133333 15.282133 34.133333 34.133333C733.866667 411.118933 718.584533 426.4 699.733333 426.4z"  ></path>' +
    '' +
    '<path d="M699.733333 597.066667 221.866667 597.066667c-18.8512 0-34.133333-15.281067-34.133333-34.133333 0-18.8512 15.282133-34.133333 34.133333-34.133333l477.866667 0c18.8512 0 34.133333 15.282133 34.133333 34.133333C733.866667 581.7856 718.584533 597.066667 699.733333 597.066667z"  ></path>' +
    '' +
    '<path d="M938.666667 16.8 153.6 16.8c-37.642667 0-68.266667 30.625067-68.266667 68.266667l0 85.333333 68.266667 0 0-85.333333 785.066667 0 0 477.866667-17.066667 0 0 68.266667 17.066667 0c37.642667 0 68.266667-30.624 68.266667-68.266667l0-477.866667C1006.933333 47.425067 976.309333 16.8 938.666667 16.8z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-search" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M991.390933 916.3936 776.426667 701.429333c55.825067-71.834667 89.093333-162.097067 89.093333-260.135467 0-234.2752-189.930667-424.2272-424.2272-424.2272C206.996267 17.0656 17.066667 207.0176 17.066667 441.2928c0 234.2976 189.930667 424.2272 424.228267 424.2272 98.0352 0 188.2976-33.269333 260.133333-89.0944l214.964267 214.965333c20.724267 20.7232 54.295467 20.7232 74.9984 0C1012.113067 970.688 1012.113067 937.115733 991.390933 916.3936L991.390933 916.3936zM123.138133 441.2928c0-175.712 142.442667-318.1728 318.155733-318.1728 175.710933 0 318.174933 142.4608 318.174933 318.1728 0 175.714133-142.464 318.176-318.174933 318.176C265.5808 759.4688 123.138133 617.008 123.138133 441.2928L123.138133 441.2928z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-lock" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M928 932.032 928 451.984c0-33.104-26.624-60-59.424-60L273.984 391.984l0.304-25.44c0-161.632 98.896-274.56 240.56-274.56 103.696 0 196.096 60.176 241.216 157.072 6.96 15.008 24.608 21.44 39.552 14.352 14.848-7.04 21.184-24.912 14.16-39.904C754.816 105.44 641.84 32 514.848 32c-173.824 0-299.984 140.672-299.984 334.192l-0.32 25.808L155.44 392C122.624 392 96 418.88 96 451.984l0 480.048C96 965.104 122.624 992 155.44 992l713.136 0C901.376 992 928 965.104 928 932.032L928 932.032zM155.44 451.984l713.136 0 0 480.048L155.44 932.032 155.44 451.984 155.44 451.984z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-prev" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M784.652701 955.6957 346.601985 517.644983c-2.822492-2.822492-2.822492-7.902977 0-11.289967l439.179713-439.179713c6.77398-6.77398 10.725469-16.370452 10.725469-25.966924L796.507166 36.692393c0-20.32194-16.370452-36.692393-36.692393-36.692393l-4.515987 0c-9.596472 0-19.192944 3.951488-25.966924 10.725469L250.072767 489.420066c-12.418964 12.418964-12.418964 32.740904 0 45.159868l477.565601 477.565601c7.338479 7.338479 17.499449 11.854465 28.224917 11.854465l0 0c22.015436 0 40.079383-18.063947 40.079383-40.079383l0 0C796.507166 973.759647 791.99118 963.598677 784.652701 955.6957z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-more" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M128.141125 383.858875C57.578831 383.858875 0 441.437707 0 512c0 70.562293 57.578831 128.141125 128.141125 128.141125 70.562293 0 128.141125-57.578831 128.141125-128.141125C256.282249 441.437707 198.703418 383.858875 128.141125 383.858875zM512 383.858875C441.437707 383.858875 383.858875 441.437707 383.858875 512c0 70.562293 57.578831 128.141125 128.141125 128.141125 70.562293 0 128.141125-57.578831 128.141125-128.141125C640.141125 441.437707 582.562293 383.858875 512 383.858875zM895.858875 383.858875c-70.562293 0-128.141125 57.578831-128.141125 128.141125 0 70.562293 57.578831 128.141125 128.141125 128.141125 70.562293 0 128.141125-57.578831 128.141125-128.141125C1024 441.437707 966.985667 383.858875 895.858875 383.858875z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-next" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M246.121279 955.6957l438.050717-438.050717c2.822492-2.822492 2.822492-7.902977 0-11.289967L244.992282 67.175303c-6.77398-6.77398-10.725469-16.370452-10.725469-25.966924L234.266814 36.692393C234.266814 16.370452 250.637266 0 270.959206 0l4.515987 0c9.596472 0 19.192944 3.951488 25.966924 10.725469l478.694598 478.694598c12.418964 12.418964 12.418964 32.740904 0 45.159868l-477.565601 477.565601c-7.338479 7.338479-17.499449 11.854465-28.224917 11.854465l0 0c-22.015436 0-40.079383-18.063947-40.079383-40.079383l0 0C234.266814 973.759647 238.7828 963.598677 246.121279 955.6957z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-msg" viewBox="0 0 1026 1024">' +
    '' +
    '<path d="M256.282249 365.794928c-35.563396 0-63.788313 29.353914-63.788313 66.046307 0 36.127894 28.789416 66.046307 63.788313 66.046307 35.563396 0 63.788313-29.353914 63.788313-66.046307C320.070562 395.713341 291.281147 365.794928 256.282249 365.794928L256.282249 365.794928 256.282249 365.794928 256.282249 365.794928zM512 365.794928c-35.563396 0-63.788313 29.353914-63.788313 66.046307 0 36.127894 28.789416 66.046307 63.788313 66.046307 35.563396 0 63.788313-29.353914 63.788313-66.046307C575.788313 395.713341 547.563396 365.794928 512 365.794928L512 365.794928 512 365.794928 512 365.794928zM768.282249 365.794928c-35.563396 0-63.788313 29.353914-63.788313 66.046307 0 36.127894 28.789416 66.046307 63.788313 66.046307 35.563396 0 63.788313-29.353914 63.788313-66.046307C832.070562 395.713341 803.281147 365.794928 768.282249 365.794928L768.282249 365.794928 768.282249 365.794928 768.282249 365.794928zM895.858875 32.176406 128.141125 32.176406C57.578831 32.176406 0 91.448732 0 164.833517l0 499.016538c0 73.384785 58.707828 141.124587 130.963616 141.124587l195.316428 0c33.869901 36.127894 174.994487 182.332966 174.994487 182.332966 6.209482 6.77398 16.370452 6.77398 22.579934 0 0 0 103.303197-116.851158 170.478501-182.332966l199.832415 0c72.255788 0 130.963616-67.739802 130.963616-141.124587L1025.128997 164.833517C1024 91.448732 966.985667 32.176406 895.858875 32.176406L895.858875 32.176406 895.858875 32.176406 895.858875 32.176406zM960.211687 662.15656c0 36.127894-30.482911 74.513782-66.610805 74.513782l-196.445424 0c-23.708931 0-45.159868 24.273429-45.159868 24.273429L513.693495 903.197354l-137.737596-141.689085c0 0-25.966924-24.273429-48.546858-24.273429L130.963616 737.23484c-36.127894 0-66.610805-38.385888-66.610805-74.513782L64.352811 168.220507c0-36.127894 28.789416-66.046307 63.788313-66.046307l768.282249 0c35.563396 0 63.788313 29.353914 63.788313 66.046307L960.211687 662.15656 960.211687 662.15656 960.211687 662.15656 960.211687 662.15656zM960.211687 662.15656"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-del" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M977.454545 279.272727 47.109642 279.272727c-20.310744 0-46.263361-26.516804-46.263361-46.263361C0.282094 212.134435 26.798898 186.181818 47.109642 186.181818l186.181818 0L233.29146 93.090909C232.727273 32.722865 265.450138 0 325.818182 0l369.5427 0c59.803857 0 95.347658 32.722865 95.347658 93.090909L790.70854 186.181818l186.181818 0c20.310744 0 46.263361 26.516804 46.263361 46.263361C1023.717906 252.755923 997.765289 279.272727 977.454545 279.272727L977.454545 279.272727zM698.181818 139.918457c0-20.310744-26.516804-46.263361-46.263361-46.263361L372.64573 93.655096c-20.310744 0-46.263361 26.516804-46.263361 46.263361L326.382369 186.181818l372.363636 0L698.181818 139.918457 698.181818 139.918457zM465.736639 372.363636l0 465.454545L372.64573 837.818182 372.64573 372.363636 465.736639 372.363636 465.736639 372.363636zM651.918457 372.363636l0 465.454545L558.827548 837.818182 558.827548 372.363636 651.918457 372.363636 651.918457 372.363636zM186.463912 325.536088c20.310744 0 46.827548 26.516804 46.827548 46.263361l0 511.717906c0 20.310744 26.516804 46.263361 46.263361 46.263361l465.454545 0c20.310744 0 46.263361-26.516804 46.263361-46.263361L791.272727 372.363636c0-20.310744 26.516804-46.263361 46.263361-46.263361 20.310744 0 46.263361 26.516804 46.263361 46.263361l0 558.545455c0 60.368044-32.722865 93.090909-93.090909 93.090909l-558.545455 0c-60.368044 0-93.090909-32.722865-93.090909-93.090909L139.072176 372.363636C139.636364 352.052893 166.153168 325.536088 186.463912 325.536088L186.463912 325.536088zM186.463912 325.536088"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-close" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M569.578831 512l378.213892-378.213892c15.805954-15.805954 15.805954-41.772878 0-57.578831s-41.772878-15.805954-57.578831 0l-378.213892 378.213892-378.213892-378.213892c-15.805954-15.805954-41.772878-15.805954-57.578831 0l0 0c-15.805954 15.805954-15.805954 41.772878 0 57.578831l378.213892 378.213892-378.213892 378.213892c-15.805954 15.805954-15.805954 41.772878 0 57.578831l0 0c15.805954 15.805954 41.772878 15.805954 57.578831 0l378.213892-378.213892 378.213892 378.213892c15.805954 15.805954 41.772878 15.805954 57.578831 0l0 0c15.805954-15.805954 15.805954-41.772878 0-57.578831L569.578831 512z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-tuichu" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M625.951683 171.89685c0 14.460325-11.736287 26.198659-26.198659 26.198659h-261.970219c-14.460325 0-26.196613 11.738334-26.196612 26.198659v555.847092c0 14.462372 11.736287 26.198659 26.196612 26.198659h353.239831c14.460325 0 26.196613-11.736287 26.196612-26.198659v-183.374241c0-14.460325 11.738334-26.196613 26.198659-26.196612s26.198659 11.736287 26.198659 26.196612c0 0.835017-0.393972 1.545191-0.471743 2.356672v180.704438c0 43.35437-35.207838 78.511043-78.64305 78.511043h-353.136476c-43.432142 0-78.643049-35.154626-78.643049-78.511043V223.795819c0-43.35437 35.207838-78.51309 78.643049-78.51309h262.389773v0.419555c14.461349-0.001023 26.196613 11.73424 26.196613 26.194566z" fill="#272536" ></path>' +
    '' +
    '<path d="M410.224625 649.582869c-1.57282 3.379977-2.592032 7.047503-2.592032 11.002577 0 14.462372 11.736287 26.197636 26.196613 26.197636 12.653168 0 22.712258-9.143232 25.175354-21.088273h0.523932c30.387047-155.2927 158.802637-275.275232 318.182418-293.296659l-55.48463 55.48463c-10.243285 10.241238-10.243285 26.823899 0 37.040577 10.243285 10.245331 26.825945 10.245331 37.040578 0l100.305396-100.305397c10.243285-10.243285 10.243285-26.825945 0-37.042624l-100.305396-100.305396c-10.245331-10.243285-26.827992-10.243285-37.040578 0-10.243285 10.241238-10.243285 26.823899 0 37.040577l55.274853 55.274853c-182.618018 18.179016-329.9975 153.693274-367.276508 329.997499z" fill="#272536" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-dingbu" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M722.985784 271.298939H298.089607c-14.07046 0-25.441439 11.391445-25.441438 25.463952 0 14.053064 11.370978 25.462928 25.461904 25.462928h424.936086c14.052041 0 25.446555-11.392468 25.446555-25.462928-0.020466-14.071484-11.408841-25.463951-25.50693-25.463952z m-5.944386 270.454712L528.831852 353.535919c-4.635577-4.797259-11.127432-7.783267-18.288528-7.783267a25.326828 25.326828 0 0 0-18.504446 7.984858L304.038086 541.753651a25.460882 25.460882 0 0 0-7.41897 18.026562c0 14.127765 11.449773 25.582655 25.603121 25.582655 7.234775 0 13.808494-3.006474 18.445095-7.887644l144.051836-144.041604v293.804513c0 14.051017 11.389398 25.462928 25.463952 25.462928 14.072507 0 25.445532-11.393491 25.445532-25.462928V432.645674L680.929945 577.884546a25.507954 25.507954 0 0 0 18.043959 7.458879c14.136975 0 25.566282-11.435447 25.566282-25.562189-0.060375-7.036253-2.883677-13.389962-7.498788-18.027585z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-xiayiye-copy" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M909.966 546.631c0.086-0.116 0.165-0.235 0.25-0.351 0.47-0.649 0.931-1.304 1.374-1.972 0.141-0.212 0.273-0.429 0.41-0.641 0.375-0.582 0.747-1.167 1.102-1.763 0.156-0.261 0.302-0.527 0.453-0.79 0.322-0.561 0.642-1.124 0.948-1.697 0.148-0.278 0.288-0.561 0.431-0.841 0.292-0.571 0.579-1.142 0.852-1.723 0.128-0.274 0.248-0.548 0.371-0.823 0.27-0.6 0.536-1.201 0.787-1.809 0.104-0.254 0.202-0.51 0.301-0.764 0.25-0.635 0.495-1.273 0.725-1.919 0.083-0.233 0.159-0.469 0.237-0.704 0.227-0.668 0.447-1.338 0.651-2.017 0.065-0.221 0.125-0.441 0.187-0.661 0.197-0.69 0.39-1.382 0.563-2.082 0.054-0.224 0.102-0.448 0.156-0.672 0.163-0.693 0.319-1.387 0.457-2.089 0.050-0.254 0.091-0.509 0.136-0.763 0.122-0.669 0.241-1.34 0.341-2.017 0.047-0.322 0.081-0.647 0.123-0.97 0.079-0.61 0.16-1.218 0.22-1.834 0.046-0.467 0.071-0.934 0.106-1.401 0.035-0.479 0.080-0.955 0.103-1.438 0.094-1.924 0.094-3.852 0-5.777-0.024-0.482-0.069-0.959-0.103-1.439-0.035-0.467-0.060-0.934-0.106-1.401-0.059-0.616-0.141-1.225-0.22-1.835-0.042-0.323-0.076-0.647-0.123-0.969-0.099-0.677-0.219-1.349-0.341-2.019-0.046-0.254-0.086-0.509-0.136-0.762-0.138-0.702-0.295-1.397-0.457-2.091-0.052-0.224-0.099-0.448-0.155-0.671-0.173-0.701-0.364-1.394-0.563-2.085-0.063-0.22-0.122-0.44-0.187-0.66-0.204-0.678-0.424-1.35-0.651-2.018-0.080-0.234-0.155-0.47-0.237-0.704-0.229-0.646-0.474-1.284-0.725-1.919-0.1-0.255-0.196-0.51-0.301-0.763-0.251-0.61-0.517-1.213-0.788-1.812-0.124-0.273-0.243-0.548-0.37-0.821-0.273-0.581-0.561-1.154-0.853-1.725-0.143-0.279-0.281-0.561-0.43-0.839-0.305-0.573-0.624-1.137-0.948-1.698-0.151-0.263-0.298-0.528-0.453-0.789-0.355-0.597-0.727-1.181-1.102-1.763-0.138-0.213-0.27-0.429-0.41-0.641-0.443-0.668-0.904-1.323-1.374-1.972-0.085-0.117-0.165-0.235-0.25-0.351-1.858-2.524-3.915-4.892-6.147-7.085l-233.526-233.524c-22.841-22.841-59.845-22.841-82.688 0s-22.841 59.845 0 82.688l134.081 134.081h-560.533c-32.32 0-58.476 26.182-58.475 58.475s26.154 58.475 58.475 58.475h560.533l-134.081 134.079c-22.841 22.841-22.841 59.845 0 82.688 11.421 11.421 26.381 17.131 41.344 17.131s29.922-5.711 41.344-17.131l233.527-233.527c2.232-2.192 4.287-4.56 6.145-7.084z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-geren" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M903.111111 938.296889a391.651556 391.651556 0 0 0-233.102222-346.510222 296.448 296.448 0 0 0 139.264-251.875556C809.244444 175.644444 676.266667 42.666667 512 42.666667S214.755556 175.644444 214.755556 339.911111c0 106.382222 55.523556 199.480889 140.003555 251.875556-134.513778 59.448889-229.176889 191.630222-233.870222 346.510222v3.925333c0 21.902222 17.208889 39.111111 39.111111 39.111111S199.111111 964.124444 199.111111 942.222222c3.896889-168.96 142.364444-305.066667 312.888889-305.066666s308.963556 136.106667 312.888889 305.066666c0 21.902222 17.208889 39.111111 39.111111 39.111111s39.111111-17.208889 39.111111-39.111111v-3.925333zM512 558.933333a218.652444 218.652444 0 0 1-219.022222-219.022222c0-121.258667 97.792-219.022222 219.022222-219.022222s218.993778 97.792 218.993778 219.022222c0 121.230222-97.735111 219.022222-218.993778 219.022222z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-mima" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M668.444444 280.462222c0-88.405333-70.428444-159.573333-156.444444-159.573333s-156.444444 71.168-156.444444 159.573333v106.382222h312.888888V280.462222z m172.088889 184.604445H183.466667v438.044444h657.066666v-438.044444zM277.333333 280.462222c0-131.413333 104.817778-237.795556 234.666667-237.795555s234.666667 106.382222 234.666667 237.795555v106.382222h109.511111c34.417778 0 62.577778 28.16 62.577778 62.577778v469.333334c0 34.417778-28.16 62.577778-62.577778 62.577777H167.822222c-34.446222 0-62.577778-28.16-62.577778-62.577777V449.422222c0-34.417778 28.131556-62.577778 62.577778-62.577778h109.511111V280.462222z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-set" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M588.288 959.488H432.128l-40.96-143.872-10.752-4.608-131.072 72.704L138.752 773.12l72.704-130.56-4.608-10.752-143.872-40.96V434.176l143.872-40.96 4.608-10.752-72.704-131.072 110.592-110.592 131.072 72.704 10.752-4.608 40.96-143.872h156.16l40.96 143.872 10.752 4.608 131.072-72.704 110.592 110.592L808.96 381.952l4.608 10.752 143.872 40.96v156.16l-143.872 40.96-4.608 10.752 72.704 130.56-110.592 110.592-141.312-77.312 22.528-40.96 110.592 61.44 60.928-60.928-67.072-120.832 5.12-10.752c4.608-9.216 8.704-18.944 11.776-28.672l4.096-11.264 133.12-37.888V469.504l-133.12-37.888-4.096-11.264c-3.584-9.728-7.168-18.944-11.776-28.672l-5.12-10.752 67.072-120.832-60.928-61.44L642.048 266.24l-10.752-5.12c-9.216-4.608-18.944-8.704-28.672-11.776l-11.264-4.096-37.888-133.12H467.456l-37.888 133.12-11.264 4.096c-9.728 3.584-19.456 7.168-28.672 11.776L378.88 266.24 257.536 198.656 196.608 259.584l67.072 120.832-5.12 10.752c-4.608 9.728-8.704 18.944-11.776 28.672l-4.096 11.264-133.12 37.888v86.016l133.12 37.888 4.096 11.264c3.584 9.728 7.168 18.944 11.776 28.672l5.12 10.752-67.072 120.832 60.928 60.928 120.832-67.072 10.752 5.12c9.216 4.608 18.944 8.704 28.672 11.776l11.264 4.096 37.888 133.12H552.96l29.184-101.376 45.056 12.8-38.912 135.68z m-77.824-239.616c-114.688 0-207.872-93.184-207.872-207.872 0-114.688 93.184-207.872 207.872-207.872 114.688 0 207.872 93.184 207.872 207.872-0.512 114.688-93.696 207.872-207.872 207.872z m0-356.352c-81.92 0-148.992 66.56-148.992 148.992 0 81.92 66.56 148.992 148.992 148.992 81.92 0 148.992-66.56 148.992-148.992C658.944 430.08 592.384 363.52 510.464 363.52z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-tongji" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M824.860444 516.579556c0.284444 5.717333 0.853333 11.377778 0.853334 17.180444 0 185.6-150.528 336.128-336.156445 336.128S153.429333 719.388444 153.429333 533.788444c0-185.628444 150.499556-336.156444 336.128-336.156444 7.424 0 14.648889 0.625778 21.930667 1.109333V108.231111c-7.310222-0.398222-14.506667-1.109333-21.930667-1.109333-235.605333 0-426.666667 191.032889-426.666666 426.666666 0 235.605333 191.061333 426.666667 426.666666 426.666667 235.633778 0 426.666667-191.061333 426.666667-426.666667 0-5.802667-0.625778-11.434667-0.853333-17.180444h-90.510223z" fill="" ></path>' +
    '' +
    '<path d="M491.776 63.544889a58.624 58.624 0 0 0-58.652444 58.652444v410.680889c0 32.455111 26.282667 58.652444 58.652444 58.652445h410.680889a58.652444 58.652444 0 0 0 58.652444-58.652445c0-259.185778-210.147556-469.333333-469.333333-469.333333z m31.715556 437.276444V154.311111c177.464889 29.895111 317.297778 169.159111 347.249777 346.538667H523.491556z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-kaiguanclose" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M309.794 819.848h404.239c169.953 0 307.726-137.774 307.726-307.727s-137.774-307.726-307.726-307.726h-404.239c-169.952 0-307.726 137.773-307.726 307.726s137.774 307.727 307.726 307.727zM309.445 233.5c154.23 0 279.268 125.031 279.268 279.268s-125.039 279.268-279.268 279.268c-154.24 0-279.269-125.033-279.269-279.268 0-154.238 125.030-279.268 279.269-279.268z" fill="#bbb" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-shouye" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M894.765125 501.642095L525.51634 156.064428 156.263461 500.635161a22.75526 22.75526 0 0 0-7.250124 15.932878c-0.213871 6.114255 1.967818 11.93789 6.139837 16.396435a22.970154 22.970154 0 0 0 16.73515 7.268544 22.745027 22.745027 0 0 0 15.591093-6.15314l338.000084-315.394227L863.503121 535.045879a22.809495 22.809495 0 0 0 15.628955 6.172583c6.317892 0 12.407588-2.642177 16.699334-7.242961a22.719444 22.719444 0 0 0 6.16235-16.389272c-0.198521-6.108115-2.76702-11.769045-7.228635-15.944134zM655.529439 263.443018h101.238752v89.416495c0 12.613272 10.260691 22.874987 22.874987 22.874987s22.877033-10.261715 22.877033-22.874987V217.689974H655.529439c-12.614296 0-22.87601 10.261715-22.87601 22.87601s10.259668 22.877033 22.87601 22.877034z" fill="" ></path>' +
    '' +
    '<path d="M779.642155 507.286652c-12.613272 0-22.874987 10.262738-22.874987 22.877033v266.720667h-131.556245V607.760994H425.787988v189.122335H294.238906V530.163685c0-12.614296-10.262738-22.877033-22.877033-22.877033-12.613272 0-22.874987 10.262738-22.874987 22.877033v312.470641h223.055168V653.514037H579.45788v189.120289h223.062331V530.163685c0-12.614296-10.262738-22.877033-22.878056-22.877033z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-time" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M515 68.5c-243.5 0-441.6 198.1-441.6 441.6S271.5 951.7 515 951.7s441.6-198.1 441.6-441.6S758.6 68.5 515 68.5z m0 809.6c-202.9 0-368-165.1-368-368s165.1-368 368-368 368 165.1 368 368-165 368-368 368z m171.1-259.8L533.4 530V289.3c0-20.3-16.5-36.8-36.8-36.8-20.3 0-36.8 16.5-36.8 36.8v257.6c0 13.7 17 25.1 28 31.4 3.1 4.6 11.4 8.8 16.6 11.7l151.8 92c17.6 10.2 36.7 4.1 46.8-13.5 10.2-17.5 0.7-40-16.9-50.2z" fill="" ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)