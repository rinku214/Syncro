<?php get_header(); ?>

<section class="p-hero">
    <div class="p-hero__inner inner">

        <div class="p-hero__contents">

            <div class="p-hero__content">
                <p class="p-hero__SitTitle">Syncro</p>
                <h1 class="p-hero__title">チームのタスクを<br class="o-br__pc">全て可視化</h1>
                <h3 class="p-hero__subtitle">Syncroはチーム内での円滑なタスク管理、共有、整理を目的とし、アプリ内で直感的に行えます。</h3>

                <div class="p-hero__app">
                    <div class="p-hero__review">
                        <span class="p-hero__review-Apple">
                            <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="27" height="18" fill="url(#pattern0_2_38)" />
                                <defs>
                                    <pattern id="pattern0_2_38" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_2_38" transform="matrix(0.00463069 0 0 0.00694604 -0.134104 -0.161877)" />
                                    </pattern>
                                    <image id="image0_2_38" width="275" height="183" preserveAspectRatio="none" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </span>
                        <span class="p-hero__review-Android">
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="26" height="24" fill="url(#pattern0_2_53)" />
                                <defs>
                                    <pattern id="pattern0_2_53" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_2_53" transform="matrix(0.00389105 0 0 0.0042153 0 -0.00583658)" />
                                    </pattern>
                                    <image id="image0_2_53" width="257" height="240" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQEAAADwCAIAAACPN0aiAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAABAaADAAQAAAABAAAA8AAAAABjJFLyAAAZUUlEQVR4Ae3d2bIcxdUFYIsZzOwBM0uAwBMGjIFgjIALIogAccED8HK8AIQvmBwGjAlksJnBTEIg5snYxgbLRvgTO/78y91HEuec7O7Kyl0XFdlZWTmsvdbOqap6y969e7+TRyLQMQJb9u3b13Hzs+mJwHe2fP311wlDItAzAkekBno2f7YdAtkPJA16R+Cw3gHI9nePQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPQGqgewp0D0BqoHsKdA9AaqB7CnQPwDQ18PU3Rxh33759xcpffPGFsIvOJT5+ljSdB6BRkPnPf/5TwCmB6eEzTQ0M7XTYYfvb+O9//9v52GOP/eqrr8LG4vfu3cu0W7ZsETm8pbdwAPLll1/CARqQCbjgEOBE/FRhmbIGgtnhwIQ//fRTjs1x+OGHx6UjjjgizM/SUzXwIdsFgXAT0JD4888/BxTQPvnkk4gBl+OQ+bSbYH+zp3qwHANzaX/5y19efvnljz/++LjjjvvJT35yxhln/POf/zz55JPZXgL2DhJMFYcDtSu8e3j9f/3rX0cdddT777//5z//+W9/+9sPf/jDH//4x3oG+ADtQDlMI35LuMlpNKa0Ihpl9H/MMccQwD333EMJxdnfeOONW7dulebII490i0sCfpYEJZ9OAjwCl//2228/8MADxR1873vfu/baa51dmjY4Ux4LcWBG/H/605+cC7+Z88knn+T2GJvtsTy6i5KgE95rJliMDPUGoPjss88eeeSRIgBXP/zwQ4MiQP3jH/+YNjhT1gBD6s0NcIcmFNYz/PGPfyzTPoYfJuhHAwY/Ghtt37VrF6yGbQcLAXAZkazANUwzjfDENaArOOGEEwxqh9bi+F9//XWjXtblBaOjn0kzTD/VsIZrteO111574YUXZia+gUxMi2O4OFUcpqkBvs3Bikz4s5/9LAxZTOgSD8fqRgIi/RTg9nDCUZJNKRBcH7ZIjIbjPSisFgQUJQEczAROPfVUMyWHZFNFRpOnqYGwJcthtvWfs88+e8bGLr3yyiuW/yLljEgKFaYRQF84OARCDM6axrtbNvjoo49eeuklV4eN5T62b99udYhOIj41MMSnpTBbcmOXX3758ccfP2/FnTt38oJBCBPElhq2nroCIZJDAKfR3dkBGW23QsAjDPMT+aMf/ejCCy88+uijJYtLMyIZpm89/D/qb70x8/VnfsZjy5/+9KfB9ZJG/AcffLB79+7oImLmV65OKRAUDxdQOO2nSbDm6wdKZLTaz1/+8pdAg1hcmrAANHniGsBs9jPUueCCC77//e8XjxjGRg4rpxaO9AZTIv1MW4LHxQVgv8NPq5/Wx2bGgSC66KKLjIKkCeoLzGQ4sZ8T1wBrMaHHhL773e+aHM90+sjx97///dVXXxWYkcfEzIzx2o7T0UwBvd+ePXvmxc/9X3LJJQAxUpLMjamB5skQQx0MOOuss84777yZyTEv+Pzzz6NCOMvmW7tWA5C4dAKuaykQ3nzzzfn1UPGXXnop9pds3Bi9QYmZXmD6/UCxKA938cUXO884NoaPyfH0rBstQnpHaR1amwPYISkxEQCLNbSYCnvGxCJBEcC0O8kpa6BwnQmRIOYGl1122YxF+TmbRNbIIxlJlDWimZQ4UfKcJ9BMzOJ+ljoIHKRKwwroBrVLTAQ8G/fWW28NheGSrH71q19xGdLIWWC/dLbsf6IMRKXQYbbTCE9ZA8VCDBlhmz5nnnkmb8fe5aoAG+sKRHo2xugoug5WxwZXgz2RzFmycvjpGPIj3OcwJtIMz67GMYwsYZfkT35rpomiXZJeu9S8tK7kMB/QBO2KutkgNwpy4zCZbLdu3WojZcLrY8P2DsP/A8TwwgTChRwlwPC2P20XzLROAsODXbt2YT96+elcOoHwi8Nb5BOHSCkRqFyN3qaUWOIjZeGuBCVN5FAyES9zhX6TZL96467Iqlwqdw2vDosrYQlCzFpnPdQoaOYZKimVdfXVV6u8akS58+eS4cQCU9YAUwU/mFOYdR04ZJH09NNPLxQPi3KTf/jDH2IgJJlbpBRwNW53qcTHLSXP4Kur4byd4yjsdIkP9tMhHIc0dmpjOq6sklu5V2BYUISHOXyT36EXLhWnCdEJ2BKZnwor6Oc//3kMfqImpdweAlN+h6ZQJEhcrGssZHJsdVyCoY09Sk0G11xzDbqHOx+y0O0lB/HuJRu3C/hZriJcZCuA4i55HsGTqlyvRzOC9DPjJSmpCAUdpuzxnJ/zKaecYns7XLg8tSLEptBSk6h/FBophy2KsHi3u8VCsE5AHWZuNwP2xoxzADWfw7RjpqyBsGgwcmhdDNAPbNu2zSNDwePCFa+bmRfaT4gYdxV6CcvKIRBsw28BuUlDNi4hmenmG2+8YV5BURE5LHq9ZIriVJIkdF+G7F6Ck0mUGzk7z3B6zVJU8t1336WBmcQqedVVV4Xm3ejnEJM1s5pY5DTfI5sxUvA4bB+sckZWr00ZHw85ISV5eNEM58J9ipEg2IYfAuJFuhFXnN977z1rLHw83lNFpJypQMWfaq5cPls9bX7/4Ac/iOopWh+yZkHRfH3Rb37zGxPiYQ3lduKJJ952221kL354ac2sJhk55X4g/DSzYUlQX5iZgxMeB7jyyisfeuihoQaEOcvyaoHByQwt5GkEbwKN+nwqZx8iCXLMJF4EYxShDvRmPVc/psJIrH9wGDiRh5g4hqVrkU0xL4sR8DBe5Y39NNMtsnVpJsEw8VTDXfQDxXiUIMyds7oA5/3b3/7WGQOGaXQCO3bs4GtRyi3h/p0xySvnvL4hPi46yl2rDUS7aMDipqd9vDaEytEozDYBwH5qV+1hPQnAxrkNk3iSyi3FUwyTTT7cowYYFX3Z29yUR//1r3894/zwhnc00pASk7D/qaeesnJq5PMN88dC/Xl2apTjpJNOst17/vnnx+iIBh599FH9wEwzNe3WW2+N0ZQmu0oV0eT5nCcc06MG8DhM7uzwLrlxxQw/dBS33367zWPvl1hPHA54mmBDVNgE2vM/uE7nM9UmbD2ABYCIh8kMAjPpJ/yzRw0wJ9cYQ2eDe+OEe++9V58wNDMOWSoROXLHP6zzfFgrdAvh4GNoFGlEmgTfcccdxnslXqTGzmcy+Zj/HwdPvqmlgSyN30yOIkYLeOC9QX6xJBDADDHOTdNC/cO7F6JHGzXNeqiGA2HYamGYzMRM/mePGmBUQyDkcBY2lbRDZONs8saOBuK9VyXNhqOLA4JekSpC7U1rfmMW7FEDSBBe33AIahhgr2BmLLQxNJu4KzrA2MiLjiLWRqMHmO8ZmmjUZirZ43wgXB3qY4CdI89HWO4U7scFBt09I+TdOhMDA8IQRp/T4i40YOLLzDp9lmZm7Dcf0BU888wzTz/9tAABbMaRNHqvhnvF9Lrrrjv33HOD/TFEhJIjMBEzee8wcQ2ge2yH8XxMHtRnVIvlXie3ORDDoUZJvPlq4zpYaMB+iEf0ZCgG74ewRJqAcfMljjCHKWuA8cqwhwnJQIzDtySeffZZP/sZ/ByceUhvjeiKK66wx1zYTxsg4jXiXrhNFa4pa4AJ2Y/XD/YzoccinnjiCaP/Pge+B1cC0pse2DXzqIhwiGGIIQAdB8+kxatT1gB7WO1hS4ZkPOOf3/3ud/HOSoumWkKdUd97djfddJOV4vAdRQl+6gqiDhNTwgQ1MDQV9jOe53xefPFFHxWcmPEWoQro6SS9V2nPhL+IVynKXLmUOCUkp6aBIoCwFvbTwO9//3uPGef4pzD4kAGk97lFH6i0gciPxNBoyPth+JC5jTzBlDXAcjTw4IMPWv+Zks2WQyno+e82SjA9KOPJYdGTgXQKGoiemnmGK6G8l78S8nrAX//618lYa0jBJYTJwMf5/CuZ6QEMHXyKnRYB/a1zDDWXUJOFFjEFDQRAsREmTAmGPXy/p0FzBrxJ9vAvXtrUGxCDMNLHamlxN5vMfwy3T0cDBU12eueddwyBuLESmYENIwDP00477YYbbvB6WtkpE7m/X/i/DmHDmY/hxok8I8BFQRPp2cYrL16WTwHUopdFBd+hAWn8jaceANoiQa0IMqhV0KrymYgGwhJ4bwh03333hSRWhen0ygWvN43uv/9+/kVXAF7zATKYRkun0IyYn7GHz/sQQD9PQS+TghhvjcGL+RyNKcHMGvQya1K9rJbmAwfCXafMM4Wj0l9PoHeubuZaGcLZO/g2kj1gxxyOCfQGU+gHrAL5kqGNsBRALa4fKJ9YcPPILTHwNc4xKzhQ+ibix6gB3mVN7IAeuDtHGmdhgx+vAZi3Ca95Y0ZWRIAM/HtV/LvzcJlIEczhqFjWcrIaowYOQmWOx54loAUApCPm+70KE19cWw5kWQoT6HU9g+ijYzEWCuozXLFdQ/3DGDVwEJJBPATAAwkA2laA9wE4p4PclZeqI0AG9uDNkiPnMisIMYgsMdWLrp7hqDUA0DhKs7kZvC/4WqrjkMrPkiwDS0CAIbyK7VGUKCt6ZvaKwBIqUKuIUWtgvpHw5fIpwYMrFunYwJbNfLKMWQICrKAf0AnH11fDW/FH4ZJyLFTZBKU3CGSdLVGbBvgmSuWSMrv1IMAf+ceGt99+201GR7E3X6YE68lplWlH3Q9AswBKBnCKTUq+3zdReKBwOavEr/uyycDbebt37w4kirdqyDSj1kAhWAggOgGgexrUh3IbQrk0ZJIB7v+5554zTOWhis9qqKVj1ADGl9Fk+JVAFun1ABDfs2eP3YBFoBzFheQWkf9q81xQu1jHcMjQNFq3oFIWB90Y/4cGpo4CaPH38YK8DYHHHnusRNaChrR8cMpDwt4eVISxlmNYk1oFLTkfjNQKb8o7gGZFn/uAZF0ATQZsU/pOUZSijVHukhu7seLGqIHSkqFHEQa0S5ali0JKys0HfFPE67OYoRT544o/ZfLXG/RQly6br+q3z0F36m/JvQHjI7tWETTEMNKDVYYudrjqwkhXuoLrr78+No/rZv7tm7yBlCN9Zo7xgnnFnfDT2Gkh6O67765LSkV4QcR3mOWv3FCatVcBa38PP/xwdAgbAHe1t2iLbu3mm2/2/SyM9NNUSpUEKIEMKLwuknK+5ZZbzjnnnGh4sd1qcThk6WOcD6g0+BwCjGeyFfbDy5m/0Dtk8w6ZQObcfwggxlpuEYk3NOD8i1/8ImpyyKzGlgDjPeCpFYgORj/5EW3UHF9M8WdNW7durds0pfiAjVJAwWTO8q9bxCJAHqkGoBnYOQuHFf0VpCFKXRTkfPnllwdRMF7mfGQxmxnCmWee6VXauoUuITdN2LZtW/zDbPkrPs00IorewLSH8ktLq1SJpezcx3bBsIepW0qVqg4zGa8GAMqXgA+azt6PsQ4tclj7zYd5RJwom81K9N0EXOEviUFxikamzRe05BxU25+R6dC0Lr6TxT1rpgZGbwBVmo9LFesGOk+v+OvYinkuOqsxaoDlkM8R/SkImM3f4yFldTiQABuUJeeiN+Xyl8Qg0iV2rV7uEjLUBDUHpkOLhGO2KuCSCujlok+oWxneyhddZ/KE7UzMeH6OUQMME+xnrQiwornpIlAzTgjGKwLdic2ZKqJcJQ7Di6jA4vLUEK0AZrRIQdE6AfFIaWBZmlmxGkr0HJecHYqOp4mEKxZRN6sxakALMS88R3gyfxxkcFK35ZGbpU/MYKfwiIqLcoP6LOenlxMWUfRC81T/eKdC04SVReTOSOksBp5ap/mLqIZCX3/9dZAqNDqfRZRSK8+RamDYPKNYq3hhvGF8rbClDHbCdYc8oyDhCJiIN/pknt10WwFGdNEuTaNwZ5rHfotszz//fMijFpIlH+z3vqWfCgoNKEg1wqeUZCMJjFQDQUFn7kqXbYi5ILzYxiep/Uc38yC9EmN+HG7SzsDOnTsXJ78FNapkaz8R16MH0ECHBmqySO9DkndJWT1AfjYZQwBhTTDGUb2sTWY40j2yaBWbsZ9PJi7aEyvo4osvtp9qsqhEboyzxBJdxILGYJs027e8HflM+v3PkqcY8C80wKdol33iBXUCpW526Hbs2BGFxlAzxFASjCQwag2gI4911113LdpajMFU7ORxFzIgAB+qcCyh3CXwQNMowXdzjYX0qDEVXkLTMP7OO++MNSgK1NLwL0to8rqKGK8GWM5hhcEnDNbVpEw8EgSYzy67v/OI+pBEaCD0MJJKqsZI5wPAgpShuZH6eMDKmqwLAV2NBT1GZE030oCYsQlAxUaqAcMSYJlXWWVbF+6ZeFQIxLgreL+E0dfG2j5GDYTb0JO+9NJLowVuY3D3dhfzPf7443oAh7aPsBNQqzFqIJDSA5S3VHujzmTay5S7du2KXj01sA6zch46Af8lHEv167gzk44PgdjhiX5gfLXbX6Mx9gOqRQO2OXMgNE7SrKtWjOipjdTAukDbn9gKvU2cdd+WN4wSgZEv7o20H7CeYItqlAbNSq0bAd9j5NTWfduybhipBvIfhZdFgGWUYzhkmXsZJW2ojBVrwDDR0H9+sDj/EsaGWpc3jQUBDyaqyryhx1C/FWvA2lkcQyw8I7SgT2gNS8nwMhGIl4xTA2tjTgMuQKcAZDJABmunztg2EfCGMfuGrcfWglX2A4X0M6DQwDjBmqln/vz2CDCojYJxmnUUGggxBEDCjX7T6tsTosOUjOsfgw7k9VYLyCo1sGbLPSxkUWjNSxnZNALeMM5+YNaCQ0QibI3IQrKnJGaT5u/2EVj0y4AbRmiV/cBQA9EAGjBqzOelN2zOMd8Yn4ca4XBolRoIOOJ1GcbTA3jZz4R4hDCNmVut1I2h+bgR1naVGgg4bCIG6eMJOQOh+f5hhMBllTaAwPBbrhu4fUG3rF4DGM89OEIMXvpODSzI2KvNllljp2y11ZgvfZUaCParUyG9QHyGYL6iGTMBBDw1FL39qNqy4q/Jhvsf4uJb54ZDjugWqCIC3kWS2KgpDiCWQIQPCav0h0xTJUGR9GZyU9vIJ6q9+Ty/ffNnyio/1wzMR5ZWxzuxEjgY0cddtm/fXtpVkq08sOJvq8Q8OHCJsxh096yET5QFdjAqaK4cr6zAPAIHUpcVjnBb1vpYM7yY83wOq41ZsQaiH0DxAKh0CBFfoIGyo1wt8RkYAwJME9XgswTKT47M106jG49LYegx1HlYh1VqAFgBDT9hGoD3jvgubEDpakkzrHSGm0AgbMemQ+c1QoOuWAMHt2Uo5OBp8upoEUD3Nes2NrOucl1oTYAyMhFYMgKr7AcO1NTiP8bmMA5U4YxvGoHx9gMpgKaJ1VDlR6qBFEBDHGq9qmMcC7WOada/LQRG2g+0BWLWtmkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB1EAFEDOLphFIDTRtvqx8BQRSAxVAzCyaRiA10LT5svIVEEgNVAAxs2gagdRA0+bLyldAIDVQAcTMomkEUgNNmy8rXwGB/wLLQ+ZBxFyUaQAAAABJRU5ErkJggg==" />
                                </defs>
                            </svg>
                        </span>
                        123000 + ★★★★★ 件のレビュー
                    </div>

                    <div class="p-hero__button">
                        <a href="#" class="c-button__download">今すぐダウンロード</a>
                        <a href="#" class="c-button__login">ログイン</a>
                    </div>
                </div>
            </div>

            <div class="p-hero__image"><img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/SyncroApp-image.png" alt="アプリ画像"></div>
        </div>

    </div>
</section>

<section class="p-worries" id="worries">
    <div class="p-worries__inner inner">

        <h1 class="p-worries__title c-section-title">チーム内で<br>こんなお悩みありませんか？</h1>

        <div class="p-worries__items">

            <div class="p-worries__item">
                <div class="p-worries__item-ravel">課題1</div>
                <div class="p-worries__item-title">計画が見えない</div>
                <div class="p-worries__item-text">誰が何をしているか見えず自分の優先順位がわからない</div>
            </div>

            <div class="p-worries__item">
                <div class="p-worries__item-ravel">課題2</div>
                <div class="p-worries__item-title">共有がうまくいかない</div>
                <div class="p-worries__item-text">報告・連絡に時間が奪われ肝心の作業が進まない</div>
            </div>

            <div class="p-worries__item">
                <div class="p-worries__item-ravel">課題3</div>
                <div class="p-worries__item-title">状況整理が難しい</div>
                <div class="p-worries__item-text">タスクの漏れや期限直前のミス発覚が防げない</div>
            </div>

        </div>
    </div>
</section>

<section class="p-features" id="features">
    <div class="p-features__inner inner">

        <h1 class="p-features__title c-section-title">Syncroが<br><span class="o-accent-color">そんな問題を解決いたします！</span></h1>

    </div>

    <div class="p-features__items">

        <div class="p-features__item">

            <div class="p-features__item-content">
                <div class="p-features__item-head">
                    <div class="p-features__item-function">機能<span class="p-features__item-number">01</span></div>
                    <div class="p-features__item-ravel">プロジェクト管理</div>
                </div>

                <div class="p-features__item-title">
                    管理しやすい+拡張性のあるダッシュボードで<br>
                    <span class="o-accent-color p-features__item-title--font-size">
                        必要なタスクの<br>
                        共有が簡単に・すぐにわかる
                    </span>
                </div>
                <div class="p-features__item-text">
                    直感的に触ることのできる、自由度の高いダッシュボードが用途に応じて、用意されています。自分でダッシュボードをカスタマイズすることが可能になっているので、使いやすい形を作ることが可能です。
                </div>
            </div>

        </div>

        <div class="p-features__item">

            <div class="p-features__item-content">
                <div class="p-features__item-head">
                    <div class="p-features__item-function">機能<span class="p-features__item-number">02</span></div>
                    <div class="p-features__item-ravel">プロジェクト全体の計画</div>
                </div>

                <div class="p-features__item-title">
                    一気に共有可能なカレンダーのおかげで<br>
                    <span class="o-accent-color p-features__item-title--font-size">
                        優先度を適切に判断し<br>
                        情報の漏れを防ぐ
                    </span>
                </div>
                <div class="p-features__item-text">
                    優先度に応じて色や、マークをつけることが可能なおかげで、チーム内で同じ優先度を持つことにより、情報の漏れや遅れを防ぐことが可能です。また不要なタスクを可視化することにも繋がります。
                </div>
            </div>

        </div>

        <div class="p-features__item">

            <div class="p-features__item-content">
                <div class="p-features__item-head">
                    <div class="p-features__item-function">機能<span class="p-features__item-number">03</span></div>
                    <div class="p-features__item-ravel">リソースの可視化</div>
                </div>

                <div class="p-features__item-title">
                    自分のリソースを可視化することで<br>
                    <span class="o-accent-color p-features__item-title--font-size">
                        無理なタスク分配をなくし<br>
                        効率を上げる
                    </span>
                </div>
                <div class="p-features__item-text">
                    自分のリソースを可視化することにより、無理なタスクの割り当てを無くし効率的にタスクをこなすことが可能です。特定の人への負担集中を防ぎ、プロジェクトを健全なペースで成功へ導きます
                </div>
            </div>

        </div>

        <div class="p-features__item">

            <div class="p-features__item-content">
                <div class="p-features__item-head">
                    <div class="p-features__item-function">機能<span class="p-features__item-number">04</span></div>
                    <div class="p-features__item-ravel">使いやすいUI</div>
                </div>

                <div class="p-features__item-title">
                    直感的にわかりやすいUiを採用しているので<br>
                    <span class="o-accent-color p-features__item-title--font-size">
                        初めてでもわかりやすく<br>
                        簡単に使うことが可能
                    </span>
                </div>
                <div class="p-features__item-text">
                    マニュアル不要の直感的なデザイン。初めての方でも迷うことなく、チーム全体の生産性を最大化します。様々なツールと連携が可能なので、利便性を高め、チームの生産性を最大化します。
                </div>
            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>