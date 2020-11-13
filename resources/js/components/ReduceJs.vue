<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reduce Example</div>

                    <div class="card-body">
                        <p class="text-blood font-weight-bold">
                            {{ sum }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const reducer = (x, y) => x + y;
    export default {
        data() {
            return {
                Numbers: [1, 2, 3, 4],
                sum: 0
            }
        },
        methods: {
            reduceArray() {
                this.sum = this.Numbers.reduce(reducer);
            }
        },
        mounted() {
            this.reduceArray();
        }
    }
</script>
