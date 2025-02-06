import { createChart, AreaSeries } from 'lightweight-charts';

const url = '/api/chart';
const response = await axios.get(url);

const chart = createChart(
    document.getElementById('trading-view-charts'),
    {
        layout: {
            background: { color: 'transparant' },
            textColor: '#DDD',
        },
        grid: {
            vertLines: { color: '#0f172a' },
            horzLines: { color: '#0f172a' },
        },
        handleScroll: {
            mouseWheel: false,
            pressedMouseMove: false,
            horzTouchDrag: false,
            vertTouchDrag: false,
        },
        handleScale: {
            mouseWheel: false,
            pinch: false,
        },
    }
);

const priceFormatter = p => p.toFixed(2);

chart.applyOptions({
    localization: {
        priceFormatter: priceFormatter,
    },
});

chart.timeScale().fitContent();

const areaSeries = chart.addSeries(AreaSeries, {
    lineColor: '#65a30d', topColor: '#65a30d',
    bottomColor: 'rgba(101, 163, 13, 0.28)',
});

areaSeries.setData(response.data);
