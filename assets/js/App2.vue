
<template>
        <div class="" style="height: 100vh; overflow: hidden;">
            <div class="min-h-screen flex relative lg:static surface-ground">
                <div id="app-sidebar-2"
                    class="bg-bluegray-800 h-screen hidden lg:block flex-shrink-0 absolute lg:static left-0 top-0 z-1 select-none"
                    style="width: 280px;">
                    <div class="flex flex-column h-full">
                        <div class="flex align-items-center px-5 bg-bluegray-700 flex-shrink-0" style="height: 60px;">
                            <img src="../img/osol.svg" alt="Image" height="30"></div>
                        <div class="overflow-y-auto mt-3">
                            <ul class="list-none p-3 m-0">
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-home mr-2"></i><span
                                            class="font-medium">Dashboard</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-bookmark mr-2"></i><span
                                            class="font-medium">List of organisations</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true" data-pd-styleclass="true"><i
                                            class="pi pi-chart-line mr-2"></i><span class="font-medium">List of Osol Base</span><i
                                            class="pi pi-chevron-down ml-auto"></i><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"
                                            style="height: 248px; width: 248px; top: -92.8px; left: 0.200001px;"></span></a>
                                    <ul class="list-none py-0 pl-3 pr-0 m-0 overflow-y-hidden transition-all transition-duration-400 transition-ease-in-out hidden"
                                        style="">
                                        <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                                data-pd-ripple="true" data-pd-styleclass="true"><i
                                                    class="pi pi-chart-line mr-2"></i><span
                                                    class="font-medium">Revenue</span><i
                                                    class="pi pi-chevron-down ml-auto"></i><span role="presentation"
                                                    aria-hidden="true" data-p-ink="true" data-p-ink-active="false"
                                                    class="p-ink" data-pc-name="ripple"
                                                    data-pc-section="root"></span></a>
                                            <ul
                                                class="list-none py-0 pl-3 pr-0 m-0 hidden overflow-y-hidden transition-all transition-duration-400 transition-ease-in-out">
                                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                                        data-pd-ripple="true"><i class="pi pi-table mr-2"></i><span
                                                            class="font-medium">View</span><span role="presentation"
                                                            aria-hidden="true" data-p-ink="true"
                                                            data-p-ink-active="false" class="p-ink"
                                                            data-pc-name="ripple" data-pc-section="root"></span></a>
                                                </li>
                                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                                        data-pd-ripple="true"><i class="pi pi-search mr-2"></i><span
                                                            class="font-medium">Search</span><span role="presentation"
                                                            aria-hidden="true" data-p-ink="true"
                                                            data-p-ink-active="false" class="p-ink"
                                                            data-pc-name="ripple" data-pc-section="root"></span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                                data-pd-ripple="true"><i class="pi pi-chart-line mr-2"></i><span
                                                    class="font-medium">Expenses</span><span role="presentation"
                                                    aria-hidden="true" data-p-ink="true" data-p-ink-active="false"
                                                    class="p-ink" data-pc-name="ripple"
                                                    data-pc-section="root"></span></a></li>
                                    </ul>
                                </li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-users mr-2"></i><span
                                            class="font-medium">Team</span><span role="presentation" aria-hidden="true"
                                            data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-comments mr-2"></i><span
                                            class="font-medium">Messages</span><span
                                            class="inline-flex align-items-center justify-content-center ml-auto bg-yellow-500 text-bluegray-900 border-circle"
                                            style="min-width: 1.5rem; height: 1.5rem;">3</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-calendar mr-2"></i><span
                                            class="font-medium">Calendar</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-cog mr-2"></i><span
                                            class="font-medium">Settings</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <hr class="mb-3 mx-3 border-top-1 border-none border-bluegray-600">
                            <ul
                                class="list-none p-2 m-0 hidden origin-bottom animation-duration-150 overflow-hidden animation-ease-in-out">
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-user mr-2"></i><span
                                            class="font-medium">Profile</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-cog mr-2"></i><span
                                            class="font-medium">Settings</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                                <li><a class="flex align-items-center cursor-pointer p-3 hover:bg-bluegray-900 border-round text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                        data-pd-ripple="true"><i class="pi pi-sign-out mr-2"></i><span
                                            class="font-medium">Sign Out</span><span role="presentation"
                                            aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                            data-pc-name="ripple" data-pc-section="root"></span></a></li>
                            </ul><a
                                class="m-3 px-3 py-2 flex align-items-center hover:bg-bluegray-900 border-round cursor-pointer text-bluegray-100 hover:text-bluegray-50 transition-duration-150 transition-colors p-ripple"
                                data-pd-ripple="true" data-pd-styleclass="true"><img
                                    src="../img/osol.svg" class="mr-2"
                                    style="width: 28px; height: 28px;"><span class="font-medium">Amy Elsner</span><i
                                    class="pi pi-chevron-up ml-auto"></i><span role="presentation" aria-hidden="true"
                                    data-p-ink="true" data-p-ink-active="false" class="p-ink" data-pc-name="ripple"
                                    data-pc-section="root"></span></a>
                        </div>
                    </div>
                </div>
                <div class="min-h-screen flex flex-column relative flex-auto">
                    <div class="flex justify-content-between align-items-center px-5 surface-section shadow-2 relative lg:static border-bottom-1 surface-border"
                        style="height: 60px;">
                        <div class="flex"><a class="cursor-pointer block lg:hidden text-700 mr-3 mt-1 p-ripple"
                                data-pd-ripple="true" data-pd-styleclass="true"><i class="pi pi-bars text-4xl"></i><span
                                    role="presentation" aria-hidden="true" data-p-ink="true" data-p-ink-active="false"
                                    class="p-ink" data-pc-name="ripple" data-pc-section="root"></span></a><span
                                class="p-input-icon-left"><i class="pi pi-search"></i><input
                                    class="p-inputtext p-component border-none w-10rem sm:w-20rem"
                                    data-pc-name="inputtext" data-pc-section="root" type="text"
                                    placeholder="Search"></span></div><a
                            class="cursor-pointer block lg:hidden text-700 p-ripple" data-pd-ripple="true"
                            data-pd-styleclass="true"><i class="pi pi-ellipsis-v text-2xl"></i><span role="presentation"
                                aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                data-pc-name="ripple" data-pc-section="root"></span></a>
                        <ul
                            class="list-none p-0 m-0 hidden lg:flex lg:align-items-center select-none lg:flex-row surface-section border-1 lg:border-none surface-border right-0 top-100 z-1 shadow-2 lg:shadow-none absolute lg:static">
                            <li><a class="flex p-3 lg:px-3 lg:py-2 align-items-center text-600 hover:text-900 hover:surface-100 font-medium border-round cursor-pointer transition-duration-150 transition-colors p-ripple"
                                    data-pd-ripple="true"><i
                                        class="pi pi-inbox text-base lg:text-2xl mr-2 lg:mr-0"></i><span
                                        class="block lg:hidden font-medium">Inbox</span><span role="presentation"
                                        aria-hidden="true" data-p-ink="true" data-p-ink-active="false" class="p-ink"
                                        data-pc-name="ripple" data-pc-section="root"></span></a></li>
                            <li><a class="flex p-3 lg:px-3 lg:py-2 align-items-center text-600 hover:text-900 hover:surface-100 font-medium border-round cursor-pointer transition-duration-150 transition-colors p-ripple"
                                    data-pd-ripple="true"><i
                                        class="pi pi-bell text-base lg:text-2xl mr-2 lg:mr-0 p-overlay-badge"
                                        data-pd-badge="true" data-p-overlay-badge="true"><span id="pv_id_15_badge"
                                            class="p-badge p-component p-badge-danger p-badge-dot" data-pc-name="badge"
                                            data-pc-section="root"></span></i><span
                                        class="block lg:hidden font-medium">Notifications</span><span
                                        role="presentation" aria-hidden="true" data-p-ink="true"
                                        data-p-ink-active="false" class="p-ink" data-pc-name="ripple"
                                        data-pc-section="root"></span></a></li>
                            <li class="border-top-1 surface-border lg:border-top-none"><a
                                    class="flex p-3 lg:px-3 lg:py-2 align-items-center hover:surface-100 font-medium border-round cursor-pointer transition-duration-150 transition-colors p-ripple"
                                    data-pd-ripple="true"><img src="../img/osol.svg"
                                        class="mr-3 lg:mr-0" style="width: 32px; height: 32px;">
                                    <div class="block lg:hidden">
                                        <div class="text-900 font-medium">Josephine Lillard</div><span
                                            class="text-600 font-medium text-sm">Marketing Specialist</span>
                                    </div><span role="presentation" aria-hidden="true" data-p-ink="true"
                                        data-p-ink-active="false" class="p-ink" data-pc-name="ripple"
                                        data-pc-section="root"></span>
                                </a></li>
                        </ul>
                    </div>
                    <div class="p-5 flex flex-column flex-auto">
                        <div class="border-2 border-dashed surface-border border-round surface-section flex-auto">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</template>

<script>

export default {
    data() {
        return {
            name: '',
            hello: ''
        }
    },
    methods: {
        refreshHello() {
            if (this.name) {
                fetch("/api/helloword/" + this.name, { "method": "GET" })
                    .then(response => response.json())
                    .then(result => this.hello = result);
            }
        }
    }
}
</script>