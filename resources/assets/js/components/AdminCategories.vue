<template>
    <div>
        <h1>Dashboard: Categories</h1>
        <br><br>

        <table class="uk-table uk-table-responsive uk-table-divider">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Order</th>
                    <th>Published</th>
                    <th>Updated at</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr v-for="category in categories">
                        <td>{{ category.id }}</td>
                        <td>{{ category.name }}</td>
                        <td>{{ category.code }}</td>
                        <td>{{ category.order }}</td>
                        <td>{{ category.published }}</td>
                        <td>{{ category.updated_at }}</td>
                        <td><a v-on:click="editCurrent(category)" class="uk-link">Edit</a></td>
                    </tr>
            </tbody>
        </table>

        <div id="showCategory" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Edit category</h2>
                
                <input type="text" v-model="category.name">
                <button class="uk-modal-close" type="button"></button>
            </div>
        </div>
    </div>
</template>

<script type="x/templates">

    export default {
        data: function() {
            return {
                categories: [],
                category: {
                    name: ''
                }
            }
        },

        methods: {
            getCategories: function(){
                let self = this;
                axios.get('/api/categories')
                  .then(function (response) {
                    self.categories = response.data;
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                
            },
            editCurrent: function(category) {
                let modal = UIkit.modal("#showCategory");
                console.log(category.name);
                this.$data.category = category;
                UIkit.modal('#showCategory').show();
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        beforeMount() {
            // debugger;
            this.getCategories();
            console.log(this.categories);
        },
    }
</script>
