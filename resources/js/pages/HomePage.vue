<template>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav mt-5">
                        <li class="nav-item">
                            <router-link class="nav-link active" aria-current="page" to="/deliveries">
                                <div class="item-icon ">
                                    <img src="assets/icons/deliveries-icon.png" alt="">
                                </div>
                                <h5>Рассылки</h5>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link active" aria-current="page" to="/stock-requests">
                                <div class="item-icon ">
                                    <img src="assets/icons/stock-requests-icon.png" alt="">
                                </div>
                                <h5>Требования</h5>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "HomePage",
        components: {
            
        }
    }
</script>

<style lang="scss" scoped>

    .container-fluid {
        .nav-item {
            img {
                width: 128px;
            }
            h5  {
                text-align: center;
            }
        }
    }
        
</style>