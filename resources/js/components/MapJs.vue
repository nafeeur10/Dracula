<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Map Example</div>

                    <div class="card-body">
                        <p class="text-blood font-weight-bold" v-for="list in selectedUsersList" :key="list.id">
                            {{ list}}
                        </p>
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
                userList: [
                    "Trump",
                    "ByeDen",
                    "Obama"
                ],
                selectedUsersList: []
            }
        },
        methods: {
            filterArray() {
                let selectedUsers = this.userList.map( (user) => {
                    return user.length > 5 ? user : ''
                });
                this.selectedUsersList = selectedUsers;
            }
        },
        mounted() {
            this.filterArray();
        }
    }
</script>
