<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Valid Email List</div>

                    <div class="card-body">
                        <p class="text-blood" v-for="list in selectedUsersList" :key="list.id">
                            {{ list.email }}
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
                userList: [],
                selectedUsersList: []
            }
        },
        methods: {
            getUserInfo() {
                Vue.axios.get('http://localhost:8000/data/input.json').then((response) => {
                    this.userList = response.data.user
                    this.checkAge();
                })
            },
            checkAge() {
                let selectedUsers = this.userList.filter(user => user.age > 18);
                this.selectedUsersList = selectedUsers;
            }
        },
        mounted() {
            this.getUserInfo();
        }
    }
</script>
