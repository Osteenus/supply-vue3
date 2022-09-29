<template>
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight py-6">
                    Рассылки
                </h2>
                <!-- Bootstrap 5 Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            
                        </ul>
                        <form class="d-flex w-25">
                            
                        </form>
                        </div>
                    </div>
                </nav>
                <!-- END Bootstrap 5 Navbar -->
                <div class="table-container pb-6">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Номер рассылки</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'delivery_number', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'delivery_number', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Дата создания</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'created_date', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'created_date', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Дата отправки</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'shipping_date', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'shipping_date', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Отправка из</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'location_from', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'location_from', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Статус</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'status', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'status', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Номер заказа КС</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'order_number', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'order_number', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="th-sort">
                                    <div class="th-container">
                                        <span>Количество городов</span>
                                        <div class="arrow-container">
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'number_of_locations', type: 'asc'}, $event)" class="fa fa-sort-asc sort-button up-vote-comment" aria-hidden="true" data-name="up"></i>
                                            </div>
                                            <div class="comment-icon-wrapper">
                                                <i @click="sort({column: 'number_of_locations', type: 'desc'}, $event)" class="fa fa-sort-desc sort-button down-vote-comment" aria-hidden="true" data-name="down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            <tr v-for="(item) in displayedDeliveries" :key="item.id">
                                <td>
                                    <input 
                                        v-model="checkedItems" 
                                        :id="item.id" 
                                        :value="item"
                                        class="form-check-input mt-0" 
                                        type="checkbox" 
                                        name="delivery">
                                </td>
                                <td><a href="" @click.prevent="edit(item.id)">{{ item.id }}</a></td>
                                <td>{{ formatDate(item.created_at) }}</td>
                                <td>{{ formatDate(item.shipping_date) || null }}</td>
                                <td>{{ item.location_from }}</td>
                                <td>{{ item.status }}</td>
                                <td>{{ item.order_number }}</td>
                                <td>{{ item.number_of_locations }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div v-if="nothingFound" class="m-4 ">По вашему запросу ничего не найдено</div>
                    <div v-if="!nothingFound" class="table-footer d-flex align-items-center">
                        <div class="dropdown-wrapper">
                            <select v-bind:disabled="!checkedItemsCount" :class="{ 'select-disabled': !checkedItemsCount }" class="form-select-sm ms-3">
                                <option selected>Что сделать с выделенными...</option>
                                <option value="1">Создать рассылку</option>
                                <option value="2">Отправить в печать</option>
                                <option value="3">Экспорт в Excel</option>
                                <option value="4">Удалить</option>
                            </select>
                        </div>
                        <span v-if="checkedItemsCount" class="item-count px-4">Выделено: {{ checkedItemsCount }}</span>
                        <!-- <paginator-component 
                            v-bind="{dataList: this.filteredStockRequests, 
                                    totalPages: this.totalPages,
                                    currentPageNumber: this.currentPage}"
                            @new-page="changePage">
                        </paginator-component> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import PaginatorComponent from '@/components/PaginatorComponent'
    import axios from 'axios'
    // import sortCompare from '../../helpers.js'
    // import formatDate from '../../helpers.js'
    export default {
        components: {
            // PaginatorComponent,
        },
        data() {
            return  {
                deliveries: null,
                nothingFound: false,
                checkedItemsCount: 0,
            }
        },
        methods: {
            // edit(id) {
            //    this.$inertia.get('deliveries/edit/' + id)
            // },
            formatDate(date) {
                return new Date(date).toLocaleDateString();
            },
        },
        computed: {
            displayedDeliveries() {
                return this.filteredDeliveries;
            },
            filteredDeliveries() {
                return this.deliveries;
            }
        },
        mounted() {
            axios
                .get('/api/deliveries/')
                .then(response => (this.deliveries = response.data))
        },
        updated() {
            
        },
        watch: {
        },
    }
</script>

<style scoped>
    .card-body {
        font-size: 14px;
    }
    .form-control {
        font-size: 14px;
    }
    table {
        font-size: 12px;
    }
    table .form-check-input{
        font-size: 16px;
    }
    .sort-button {
       font-size: 20px;
       position: initial;
       width: 100%;
       display: inline-block;
    }
    #select-all-checkbox {
        font-size: 16px;
    }
    .input-wrapper i {
        top: .7rem;
        right: .75rem;
        color: #999;
    }
    .invalid-feedback {
        display: block;
    }
    .th-filter {
        vertical-align: middle;
    }
    .fa-filter {
        font-size: 1rem;
        opacity: .3;
    }
    #items-count-wrapper {
        font-size: 14px;
    }
    .dropdown-wrapper,
    .item-count
    {
        font-size: 14px;
    }
    .select-disabled {
        opacity: .4!important;
    }
/******* SORT BUTTONS ********/
    .th-sort {
        vertical-align: middle;
    }
    .th-container {
        display: flex;
    }
    .th-container span {
        padding-top: .1rem;
        padding-right: .6rem;
    }
    .arrow-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .comment-icon-wrapper {
        height: 10px;
        width: 12px;
        overflow: hidden;
        position: relative;
        margin-bottom: 2px;
    }
    .sort-button {
        position: absolute;
        display: block;
        opacity: .3;
    }
    .sort-button {
        font-size: 16px;
        line-height: 20px;
        display: block;
    }
    .sort-button:hover {
        cursor:pointer;
    }
    .down-vote-comment {
        position: relative;
        top: -9px;
    }
/******* END SORT BUTTONS ********/
</style>