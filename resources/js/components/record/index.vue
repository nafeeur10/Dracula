<template>
    <div class="container my-5">
        <vue-bootstrap4-table :rows="userList" :columns="columns" :config="config">
        </vue-bootstrap4-table>   
    </div>
</template>

<script>
import VueBootstrap4Table from 'vue-bootstrap4-table'
    export default {
        data() {
            return {
                userList: [],
                config: {
                    checkbox_rows: false,
                    rows_selectable: false,
                    show_refresh_button: false,
                    show_reset_button: false,
                    show_reset_button: false,
                    per_page: 3, 
                    per_page_options:  [5,  10,  20,  30],
                    global_search: {
                        placeholder: "",
                        visibility: false,
                        case_sensitive: false,
                        showClearButton: false,
                        searchOnPressEnter: false,
                        searchDebounceRate: 1000,
                        per_page_options:  [5,  10,  20,  30],
                        init: {
                            value : ""
                        }
                    },
                    preservePageOnDataChange: false,
                    card_title: "Record Table"
                },
      
                columns: [{
                        label: "id",
                        name: "id",
                        sort: true,
                    },
                    {
                        label: "From Statements",
                        name: "from_statement",
                        sort: true,
                    },
                    {
                        label: "Financial Instrument Code",
                        name: "financial_instrument_code",
                        sort: true,
                    },
                    {
                        label: "Action",
                        name: "action",
                    },
                    {
                        label: "Entry Price",
                        name: "entry_price",
                    },
                    {
                        label: "Closed Price",
                        name: "closed_price",
                    },
                    {
                        label: "Take Profit 1",
                        name: "take_profit_1",
                    },
                    {
                        label: "Stop Loss 1",
                        name: "stop_loss_1",
                    },
                    {
                        label: "Signal Result",
                        name: "signal_result",
                    },
                    {
                        label: "Status",
                        name: "status",
                    },
                    {
                        label: "Statement Batch",
                        name: "statement_batch",
                    },
                    {
                        label: "Closed On",
                        name: "closed_on",
                    }
                ]
            }
        },
        methods: {
            getUserInfo() {
                Vue.axios.get('/storage/records.json').then((response) => {
                    this.userList = response.data.RECORDS
                    console.log(this.userList)
                })
            }
        },
        mounted() {
            this.getUserInfo();
        },
        components: {
            VueBootstrap4Table
        }
    }
</script>
