
const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      tasks: [],
    };
  },
  methods: {
    fetchUsers() {
      axios.get("api/tasks.php").then((resp) => {
        this.tasks = resp.data;
        console.log(this.tasks)
      });
    },
  },
  mounted() {
    this.fetchUsers();
  },
}).mount("#app");