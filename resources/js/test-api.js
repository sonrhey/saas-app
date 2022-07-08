const api = () => {
  const test = async () => {
    const requests  = await axios.get('http://localhost:3002/api/v1/master/test-api');
    const response = await requests.data;
    console.log(response);
  }

  return { test }
}

export default api;