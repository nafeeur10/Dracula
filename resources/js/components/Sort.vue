<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sort Example</div>

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
            sortArray() {
                let selectedUsers = this.userList.sort(function (a, b) {
                    let x = a.toUpperCase(),
                    y = b.toUpperCase();
                    return x == y ? 0 : x > y ? 1 : -1;
                });

                this.selectedUsersList = selectedUsers;
            }
        },
        mounted() {
            this.sortArray();
        }
    }
</script>
