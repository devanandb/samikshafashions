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
    </div>
</template>

<script type="x/templates">

    export default {
        data: function() {
            return {
                categories: []
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
                console.log(category.name);
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
