/**
 * 191. Number of 1 Bits
 * https://leetcode.com/problems/number-of-1-bits/
 */

/**
 * @param {number} n - a positive integer
 * @return {number}
 */
var hammingWeight = function (n) {
    let m = 2147483648, ans = 0
    while (m) {
        if (n & m) ans++
        m >>>= 1
    }
    return ans
};