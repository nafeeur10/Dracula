<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ForEach Example</div>

                    <div class="card-body">
                        <p class="text-blood font-weight-bold" v-for="list in selectedForeachList" :key="list.id">
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
                selectedForeachList: []
            }
        },
        methods: {
            foreachArray() {
                let cnt = 0;
                this.userList.forEach(element => {
                    cnt++;
                    this.selectedForeachList.push(cnt + '. ' + element);
                });
            }
        },
        mounted() {
            this.foreachArray();
        }
    }
</script>
