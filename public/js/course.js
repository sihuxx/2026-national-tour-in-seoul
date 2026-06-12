const datas = await fetch("/asset/station.json").then(res => res.json()).then(({ data }) => data);
const ctx = canvas.getContext('2d');
const controlModal = $(".control-modal")
const colorMap = {
  1: 'blue',
  2: 'green',
  3: 'brown',
  4: 'pink',
  5: 'gold',
}

// 지하철 라인 그리기
datas.map((station) => {
  const route = station.route;
  const [x, y] = station.coordinates;

  Object.entries(route).forEach(([key, value]) => {
    value.forEach(valueRoutes => {
      const [toX, toY] = datas.find(stat => stat.idx === valueRoutes).coordinates;
      ctx.beginPath();
      ctx.moveTo(x, y);
      ctx.lineTo(toX, toY);
      ctx.strokeStyle = colorMap[key];
      ctx.stroke();
    })
  })
})

// 지하철 역 원 그리기
datas.map(d => {
  const [x, y] = d.coordinates;
  ctx.beginPath();
  ctx.arc(x, y, 10, 0, Math.PI * 2);
  ctx.fillStyle = colorMap[Object.keys(d.route)];
  ctx.fill();

  ctx.beginPath();
  ctx.moveTo(x, y);
  ctx.lineTo(x, y);
  ctx.stroke();
})

// 지하철 역 이름 그리기
datas.map(d => {
  const name = d.name;
  const [x, y] = d.coordinates;
  const padding = 15
  ctx.beginPath()
  ctx.fillStyle = '#333'
  ctx.fillText(name, x + padding, y + padding)
})


canvas.addEventListener('mousedown', ({ offsetX: x, offsetY: y }) => {
  const [routeX, routeY] = datas.map(d => d.coordinates)
  if ([x, y] === [routeX, routeY]) alert("여기야!")
})